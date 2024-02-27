<?php

namespace App\Http\Controllers\User\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaystackController extends Controller
{
    public function redirectToPaystack(Request $request)
    {
        $url = "https://api.paystack.co/transaction/initialize";
        $sectret_key = env('PAYSTACK_TEST_SECRET_KEY');

        $email = $request->input('email');
        $amount = number_format($request->input('amount'), 2, '', '');

        $fields = [
            // 'email' => $email,
            // 'amount' => $amount,
            'email' => "customer@email.com",
            'amount' => "20000",
            'callback_url' => "http://localhost:8000/user/dashboard",
            'metadata' => [
                "cancel_action" => "https://owenahub.com",
            ],
        ];

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $sectret_key",
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);

        // Decode JSON string to associative array
        $response_array = json_decode($result, true);

        // Check if the response contains the "authorization_url"
        if (isset($response_array['data']['authorization_url'])) {
            $authorization_url = $response_array['data']['authorization_url'];
            header("Location: $authorization_url");
            exit;
        } else {
            // echo "Authorization URL not found in the response.";
            return redirect()->back()->with('error', "Something went wrong, try again later!");
        }

        echo $result;
    }
}
