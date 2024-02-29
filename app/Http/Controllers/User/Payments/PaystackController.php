<?php

namespace App\Http\Controllers\User\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaystackController extends Controller
{
    public function user_payment(Request $request)
    {
        $email = $request->input('email');
        $product_id = $request->input('product_id');
        $product_type = $request->input('product_type');
        $amount = number_format($request->input('amount'), 2, '', '');

        $fields = [
            // 'email' => $email,
            'email' => "customer@email.com",
            'amount' => $amount,
            'callback_url' => route('user.pay-verify'),
            'metadata' => [
                "product_id" => $product_id,
                "product_type" => $product_type,
                "cancel_action" => "https://owenahub.com/slices",
            ],
        ];

        return $this->redirectToPaystack($fields);
    }

    protected function redirectToPaystack($fields)
    {
        $url = "https://api.paystack.co/transaction/initialize";
        $s_key = env('PAYSTACK_TEST_SECRET_KEY');

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $s_key",
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);

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
