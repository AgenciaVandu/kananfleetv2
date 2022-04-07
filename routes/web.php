<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TerminalController;
use App\Mail\OrderShipped;
use App\Models\Reference;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/aliados', [PageController::class,'aliados'])->name('aliados');
Route::get('/empresa', [PageController::class,'empresas'])->name('empresa');
Route::get('/sap', [PageController::class,'sap'])->name('sap');
Route::post('/sendmail',[PageController::class,'sendmail'])->name('sendemail');

Route::get('/soluciones', function () {
    return view('soluciones');
});

Route::get('/mantenimiento', function () {
    return view('modulos.mantenimiento');
});

Route::get('/llantas', function () {
    return view('modulos.llantas');
});

Route::get('/operadores', function () {
    return view('modulos.operadores');
});

Route::get('/disponibilidad', function () {
    return view('modulos.disponibilidad');
});

Route::get('/carta-porte', function () {
    return view('modulos.carta-porte');
});

Route::get('/combustible', function () {
    return view('modulos.combustible');
});

Route::get('/estadisticas', function () {
    return view('modulos.estadisticas');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/preguntas-frecuentes', function () {
    return view('faq');
});
Route::get('/kananfleet-mobile', function () {
    return view('modulos.k-mobile');
});
Route::get('/kananfleet-mobile', function () {
    return view('modulos.k-mobile');
});

Route::get('/politica-de-privacidad', function() {
    return view('politica-de-privacidad');
});


/* Route::get('/login', function () {
    return view('terminal.login');
}); */
Route::middleware('auth')->get('/orders',[TerminalController::class,'index'])->name('terminal.index');
Route::middleware('auth')->get('/bill/{order}',[TerminalController::class,'order'])->name('terminal.order');
Route::middleware('auth')->any('/checkout', [TerminalController::class,'checkout'])->name('terminal.checkout');
Route::middleware('auth')->post('/payment',[TerminalController::class,'payment'])->name('terminal.payment');
Route::middleware(['auth'])->post('/updatePassword', [TerminalController::class, 'updatePassword'])->name('user.update.password');
Route::get('checkout/directChargeOpenpay/responsepayment/', [TerminalController::class, 'validateChargeOpenPay']);

Route::get('/gracias-por-tu-pago', function () {
    $r = $_GET['redirect_status'];
    if ($r == 'succeeded') {
        foreach (['asistente@vectiumsureste.com','recheverria@etecno.com.mx','jestefani@etecno.com.mx',auth()->user()->email] as $emails) {
            Mail::to($emails)->send(new OrderShipped(session()->get('references')));
        }

        foreach (session()->get('references') as $reference) {
            $reference = Reference::find($reference->id);
            $reference->status = 2;
            $reference->update();
        }
        return view('terminal.bill-pagada',compact('r'));
    }else{
        return redirect()->route('terminal.reject');
    }

})->name('terminal.aproved');

Route::get('/error-de-pago', function () {
    return view('terminal.error-de-pago');
})->name('terminal.reject');



Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}?email={email}', function (Request $request) {
    return view('auth.reset-password', ['token' => $request->token,'email' => $request->email]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
