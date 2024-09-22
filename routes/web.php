<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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

class Job {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Associate Software Engineer',
                'salary' => 50000,
                'currency' => 'BDT'
            ],
            [
                'id' => 2,
                'title' => 'Software Engineer',
                'salary' => 70000,
                'currency' => 'BDT'
            ],
            [
                'id' => 3,
                'title' => 'Senior Software Engineer',
                'salary' => 120000,
                'currency' => 'BDT'
            ],
        ];
    }
}


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

Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function($id) {
    $jobs = Job::all();
    $job = Arr::first($jobs, function($job) use($id) {
        return $job['id'] == $id;
    });

    return view('job-details', [
        'job' => $job
    ]);
});
