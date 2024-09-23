<?php

declare(strict_types=1);

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function (int $id) {

    $job = Job::find($id);

    if (!$job) abort(404, 'Job not found');

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});
