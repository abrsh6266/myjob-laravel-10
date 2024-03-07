<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use DB;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $listings = Listing::withCount('users')->latest()->where("user_id", auth()->user()->id)->get();
        //dd($listings);
        // $records = DB::table("listing_user")->whereIn('listing_id',$listings->pluck('id'))->get();
        // dd($records);
        return view("applicants.index", compact("listings"));

    }
    public function show(Listing $listing){
        $listings = Listing::with('users')->where("slug", $listing->slug)->first();
        return view("applicants.show", compact("listings"));
    }
}
