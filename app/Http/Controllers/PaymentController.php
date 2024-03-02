<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\SliceEnrollment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public static function store($data)
    {
        // TODO --- check AMOUNT against the slice's set amount
        Payment::create([
            'user_id' => auth()->id(),

            'amount' => $data['amount'],
            'currency' => $data['currency'],

            'product_id' => $data['product_id'],
            'product_type' => $data['product_type'],
            'product_owner' => $data['product_owner'],

            'payment_ref' => $data['payment_ref'],
            'payment_status' => $data['payment_status'],
            'payment_channel' => $data['payment_channel'],
        ]);

        if ($data['product_type'] == "slice" && $data['payment_status'] == "success") {
            SliceEnrollment::create([
                'user_id' => auth()->id(),
                'slice_id' => $data['product_id'],
            ]);
        }
    }
}
