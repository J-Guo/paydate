<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPayment(){


        /**
         * if use does not submit bank account, redirect to bank-detail page
         * finish code here
         */
        if(false)
        return redirect('bank-detail');
        else
        return view('payment');

    }

    public function showBankDetail(){

        return view('bank-detail');

    }

    public function handlePayment(){

        /**
         * handle payment here...
         * if successful, redirect to assigned-date page
         */

        return redirect('assigned-date');

    }
}
