<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Password;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\SpladeForm;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form = SpladeForm::make()
        ->class('space-y-4')
            ->action(route('users.store'))
            ->fields([
                Input::make('name')->label('Full Name'),
                Input::make('email')->label('Email'),
                Password::make('password')->label('Password'),
                Submit::make()->label('Register')->class('btn btn-primary'),
            ]);
        return view('user.seeker-register', [
            'form' => $form,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function registerSeeker(){
        $user_type = [
            'employer' => 'employer',
            'seeker' => 'seeker',
        ];
        return view('user.seeker-register',[
            'user_type'=> $user_type,
        ]); 
    }
    public function registerEmployer(){
        $user_type = [
            'employer' => 'employer',
            'seeker' => 'seeker',
        ];
        return view('user.employer-register',[
            'user_type'=> $user_type,
        ]); 
    }
    public function verify(){
        return view('auth.verify-email');
    }
}
