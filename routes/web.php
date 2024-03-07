<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckAuth;
use App\Http\Middleware\doNotAllowPayment;
use App\Http\Middleware\isEmployer;
use App\Http\Middleware\isPremiumUser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([])->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

       Route::middleware(['verified'])->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard')->middleware([isPremiumUser::class]);
        Route::get('/home', function () {
            return view('home');
        })->name('home');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware(isPremiumUser::class);
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        //seeker profile

        Route::get('/profile/seeker', [ProfileController::class, 'editSeeker'])->name('seeker.edit');
        Route::put('/resume', [ProfileController::class, 'updateResume'])->name('resume.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    Route::middleware([])->group(function () {
        Route::resource('/users', UserController::class);
        Route::get('/register/seeker',[UserController::class,'registerSeeker'])->name('seeker')->middleware([CheckAuth::class]);
        Route::get('/register/employer',[UserController::class,'registerEmployer'])->name('employer')->middleware([CheckAuth::class]); 
        Route::get('/subscribe',[SubscriptionController::class,'subscription'])->name('subscribe');
        Route::get('/pay/weekly',[SubscriptionController::class,'initiatePayment'])->name('pay.weekly');
        Route::get('/pay/monthly',[SubscriptionController::class,'initiatePayment'])->name('pay.monthly');
        Route::get('/pay/yearly',[SubscriptionController::class,'initiatePayment'])->name('pay.yearly');
        Route::get('/payment/success',[SubscriptionController::class,'paymentSuccessful'])->name('payment.success');
        Route::get('/payment/cancel',[SubscriptionController::class,'cancel'])->name('payment.cancel');
        require __DIR__.'/auth.php';
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/job/create',[PostJobController::class,'create'])->name('job.create')->middleware(isPremiumUser::class);
        Route::post('/job/store',[PostJobController::class,'store'])->name('job.store')->middleware(isPremiumUser::class);
        Route::get('job/{listing}/edit',[PostJobController::class,'edit'])->name('job.edit');
        Route::put('job/{id}/edit',[PostJobController::class,'update'])->name('job.update');
        Route::get('job',[PostJobController::class,'index'])->name('job.index');
        Route::delete('job/{id}/delete',[PostJobController::class,'destroy'])->name('job.delete');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/applicants',[ApplicantController::class,'index'])->name('applicants.index');
        Route::get('/applicants/{listing:slug}',[ApplicantController::class,'show'])->name('applicants.show');
        Route::post('shortlist/{listingId}/{userId}',[ApplicantController::class,'shortlist'])->name('applicants.shortlist');
    });
});