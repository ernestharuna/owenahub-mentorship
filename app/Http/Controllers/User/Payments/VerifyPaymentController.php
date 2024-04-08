<?php

namespace App\Http\Controllers\User\Payments;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;

class VerifyPaymentController extends Controller
{
    public function verify_payment(Request $request)
    {
        $s_key = env('PAYSTACK_SECRET_KEY');
        $reference = $request->query('reference');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $s_key",
                "Cache-Control: no-cache",
            ),
        ));
        // $err = curl_error($curl);
        $json_data = curl_exec($curl);
        $response = json_decode($json_data);
        curl_close($curl);

        if ($response->data->status) {
            $res = $response->data;

            $data = [
                'amount' => number_format($res->amount / 100, 2, '.', ''),
                'currency' => $res->currency,

                'product_id' => $res->metadata->product_id,
                'product_type' => $res->metadata->product_type,
                'product_owner' => $res->metadata->product_owner,

                'payment_ref' => $res->reference,
                'payment_status' => $res->status,
                'payment_channel' => $res->channel,
            ];

            Log::info('Transaction success:', (array) $response);

            PaymentController::store($data);

            if ($data['payment_status'] == 'success') {
                return redirect('/user/dashboard')->with('status', 'Purchase successful 🎉');
            } else if ($data['payment_status'] ==  'failed') {
                return redirect('/user/dashboard')->with('error', 'Purchase failed!');
            } else {
                return redirect('/user/dashboard')->with('error', 'Unable to verify payment status, email hello@owenahub.com');
            }
        };

        // Retrieve the request's body and parse it as JSON
        // $input = @file_get_contents("php://input");
        // $event = json_decode($input);

        // // Do something with $event
        // $this->processWebhookEvent($event);
        // http_response_code(200); // PHP 5.4 or greater
    }

    protected function processWebhookEvent($event)
    {
        if ($event) {
            // Log the event for debugging purposes
            Log::info('Received Paystack Webhook Event:', (array) $event);
            if ($event->event === 'charge.success') {
                $payment_data = $event->data;

                // Log::info('data', $paymentData);
            }
        }
    }
}
