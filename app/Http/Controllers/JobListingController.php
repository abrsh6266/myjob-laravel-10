<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class JObListingController extends Controller
{
    public function index(Request $request)
    {
        $salary = $request->query("sort");
        $date = $request->query("date");
        $jobType = $request->query("job_type");

        $listing = Listing::query();
        if ($salary === 'salary_high_to_low') {
            $listing->orderBy('salary', 'desc');
        } elseif ($salary === 'salary_low_to_high') {
            $listing->orderBy('salary', 'asc');
        }

        if ($date === 'latest') {
            $listing->orderBy('created_at', 'desc');
        } elseif ($date === 'oldest') {
            $listing->orderBy('created_at', 'asc');
        }

        if ($jobType === 'Fulltime') {
            $listing->where('job_type', 'Fulltime');
        } elseif ($jobType === 'Parttime') {
            $listing->where('job_type', 'Parttime');
        } elseif ($jobType === 'Casual') {
            $listing->where('job_type', 'Casual');
        } elseif ($jobType === 'Contract') {
            $listing->where('job_type', 'Contract');
        }

        $jobs = $listing->with('profile')->get();
        return view("home", compact("jobs"));
    }
    public function show(Listing $listing)
    {
        return view("show", compact("listing"));
    }
}
