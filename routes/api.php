<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('webhook', function(){
         // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51KULvVKf8f7JJzzSjcPs9vldR1BNXfH0X0LSTmCgo9CzxP9izxkB0lu7eEhG8CWRYsPkYWegiiUlZ70sXShDHqH0009iagICz8');

        header('Content-Type: application/json');

        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);

            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => 2000,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            $intent = json_encode($output);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
})->name('terminal.webhook');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
