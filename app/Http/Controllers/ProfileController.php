<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function editSeeker(Request $request)
    {
        return view('seeker.edit', [
            'user' => $request->user(),
        ]);
    }
    /**
     * Update the user's profile information.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        if ($request->hasFile('profile_pic')) {
            $imagePath = $request->file('profile_pic')->store('profile', 'public');
            User::find(auth()->user()->id)->update(['profile_pic' => $imagePath]);
        }
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        User::find(auth()->user()->id)->update($request->except('profile_pic'));

        return back()->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateResume(ProfileUpdateRequest $request){
        if ($request->hasFile('resume')) {
            $filePath = $request->file('resume')->store('resume', 'public');
            User::find(auth()->user()->id)->update(['resume' => $filePath]);
        }
        return back()->with('status', 'resume-updated');
    }
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
