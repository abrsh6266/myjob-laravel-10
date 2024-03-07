<?php

namespace App\Http\Controllers;

use App\Mail\ShortlistMail;
use App\Models\Listing;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function show(Listing $listing)
    {
        $this->authorize('view',$listing);
        $listings = Listing::with('users')->where("slug", $listing->slug)->first();
        return view("applicants.show", compact("listings"));
    }
    public function shortlist($listingId, $userId)
    {
        $listing = Listing::find($listingId);
        $user = User::find($userId);
        if ($listing) {
            $listing->users()->updateExistingPivot($userId, ['shortlisted' => true]);
            Mail::to($user->email)->queue(new ShortlistMail($user->name, $listing->title));
            return back()->with('success', 'user is shortlisted successfully');
        }
        return back();
    }
}
