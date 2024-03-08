<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class JObListingController extends Controller
{
    public function index(){
        $jobs = Listing::with('profile')->get();
        return view("home", compact("jobs"));
    }
}
