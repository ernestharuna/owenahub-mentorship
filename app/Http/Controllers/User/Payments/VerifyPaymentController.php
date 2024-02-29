<?php

namespace App\Http\Controllers\User\Payments;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\SliceController;

class VerifyPaymentController extends Controller
{
    public function verify_payment(Request $request)
    {
        $s_key = env('PAYSTACK_TEST_SECRET_KEY');
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
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, true);
            dd($data);
            // return redirect()->route('user.dashboard')->with('status', 'Purchase succesfull');
        }

        // $data['data']['status'];

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
