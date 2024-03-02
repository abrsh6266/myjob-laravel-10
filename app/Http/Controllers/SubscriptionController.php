<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscription(){
        return view("subscription.index");
    }
    public function initiatePayment(Request $request){
        dd('ok');
    }
}
