<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Currency;
use App\Models\Order;
use App\Models\Reference;
use App\Models\Voucher;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Openpay\Data\Openpay;
use Stripe\StripeClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class TerminalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /* $orders = Order::where('user_id',auth()->user()->id)->get(); */
        return view('terminal.dashboard');
    }

    public function order(Order $order)
    {
        $this->authorize('show', $order);
        $splits = $order->references->where('status', 1);
        return view('terminal.bill', compact('order', 'splits'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'splits' => 'required'
        ]);
        $total = 0;
        $description = "";
        $order = json_decode($request->order);
        $splits = $request->splits;
        $references = [];
        $currency = Reference::find($request->splits[0]);
        $x = $currency->currency;

        foreach ($request->splits as $split) {
            $y = Reference::find($split);
            $y = $y->currency;
            if ($x != $y) {
                return Redirect::back()->withErrors(['currency_error' => 'Los conceptos deben ser de la misma divisa para poder realizar la orden de pago']);
            }
        }


        foreach ($request->splits as $split) {
            $reference = Reference::find($split);
            array_push($references, $reference);
            $total = $reference->amount + $total;
        }

        session([
            'description' => $order->contract,
            'references' => $references,
            'total' => $total,
            'currency' => $currency->currency
        ]);

        return view('terminal.checkout', compact('total', 'splits', 'references', 'order','x'));
    }

    public function payment()
    {

        // This is a public sample test API key.
        // Don’t submit any personally identifiable information in requests made with this key.
        // Sign in to see your own test API key embedded in code samples.
        \Stripe\Stripe::setApiKey(config('stripe.stripe_secret'));

        function calculateOrderAmount(array $items): int
        {
            /* $currency_base = Currency::find(1);
            $conversion = Http::get("https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF60653/datos/" . now()->format('Y-m-d') . "/" . now()->format('Y-m-d') . "/?token=570f63e4e5caaa0a8848bcc07e31ba64774bfb9838a9940cba6b5003cb6bcfc8"); //SF43784
            $conversion = json_decode($conversion);
            $valor = $currency_base->mxn;
            foreach ($conversion->bmx->series as $valor) {
                foreach ($valor->datos as $dato) {
                    $valor = $dato->dato;
                }
            }
 */
            // Replace this constant with a calculation of the order's amount
            // Calculate the order total on the server to prevent
            // people from directly manipulating the amount on the client
            return (session()->get('total') * 100);
        }

        header('Content-Type: application/json');

        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);

            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => calculateOrderAmount($jsonObj->items),
                'currency' => ''.session()->get('currency'),
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            echo json_encode($output);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
        /* return $request->all(); */
        /*  \Stripe\Stripe::setApiKey('sk_test_51KULvVKf8f7JJzzSjcPs9vldR1BNXfH0X0LSTmCgo9CzxP9izxkB0lu7eEhG8CWRYsPkYWegiiUlZ70sXShDHqH0009iagICz8');

        // Token is created using Stripe Checkout or Elements!
        // Get the payment token ID submitted by the form:

        try {
            $charge = \Stripe\Charge::create([
                'amount' => (session()->get('total')*100)*$currency_base->mxn,
                'currency' => 'mxn',
                'source' => $request->stripeToken,
                'description' => session()->get('description'),
            ]);

        } catch (\Throwable $th) {
            return redirect()->route('terminal.reject');
        }


        if ($charge->captured) {
        foreach (['asistente@vectiumsureste.com','recheverria@etecno.com.mx','jestefani@etecno.com.mx',auth()->user()->email] as $emails) {
            Mail::to($emails)->send(new OrderShipped(session()->get('references')));
        }
            foreach (session()->get('references') as $reference) {
                $reference = Reference::find($reference->id);
                $reference->status = 2;
                $reference->update();
            }
            return redirect()->route('terminal.aproved');
        }else{
            return redirect()->route('terminal.reject');
        }
 */
    }

    public function validateChargeOpenPay()
    {
        $idOrderOpenPay = $_GET['id'];
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $charge = $openpay->charges->get($idOrderOpenPay);
        $idOrder = $charge->serializableData["order_id"];
        $validationCharge = $charge->status;
        /* return $validationCharge; */

        $voucher = Voucher::find($idOrder);

        if ($validationCharge == 'completed') {
            foreach (session()->get('references') as $reference) {
                $reference = Reference::find($reference->id);
                $reference->status = 2;
                $reference->update();
            }
            $voucher->id_openpay =  $idOrderOpenPay;
            $voucher->update();

            return redirect()->route('terminal.aproved');
        }
    }


    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withToastError('Contraseña actual no coincide');
        } else {
            $user->forceFill([
                'password' => Hash::make($request->password),
            ])->save();
            return back()->withToastSuccess('Contraseña actualizada con éxito');
        }
    }
}
