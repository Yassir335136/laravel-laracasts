<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' =>  [
            [
                'id' => 1,
                'title' => 'Job 1',
                'description' => 'Job 1 description',
            ],
            [
                'id' => 2,
                'title' => 'Job 2',
                'description' => 'Job 2 description',
            ],
            [
                'id' => 3,
                'title' => 'Job 3',
                'description' => 'Job 3 description',
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function (string $id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'Job 1',
            'description' => 'Job 1 description',
        ],
        [
            'id' => 2,
            'title' => 'Job 2',
            'description' => 'Job 2 description',
        ],
        [
            'id' => 3,
            'title' => 'Job 3',
            'description' => 'Job 3 description',
        ]
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] === $id);

    dd($job);

    return view('contact', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});
