<?php


namespace App\Http\Controllers;

use App\Models\Listing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Splade;

class PostJobController extends Controller
{
    public function create()
    {
        return view('job.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'feature_image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required|min:10',
            'roles' => 'required|min:10',
            'job_type' => 'required',
            'address' => 'required',
            'date' => 'required',
            'salary' => 'required',
        ]);

        $imagePath = $request->file('feature_image')->store('images', 'public');
        $post = new Listing;
        $post->feature_image = $imagePath;
        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->roles = $request->roles;
        $post->job_type = $request->job_type;
        $post->address = $request->address;
        $post->application_close_date = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
        $post->slug = Str::slug($request->title) . '.' . Str::uuid();
        $post->salary = $request->salary;
        $post->save();
        return back();
    }
}
