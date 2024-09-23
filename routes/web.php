<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'username' => 'Rifat Arefin'
    ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

// Route::get('/jobs', function() {
//     return view('jobs', [
//         'jobs' => Job::all()
//     ]);
// });

// Route with Eager Loadin
Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => Job::with('employer')->get(),
    ]);
});

Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
    return view('job-details', [
        'job' => $job
    ]);
});
