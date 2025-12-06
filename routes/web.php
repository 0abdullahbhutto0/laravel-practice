<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function(){
    return view('jobs', [
        'jobs'=>[
            [
            'id'=>'1',
            'title'=>'Web Developer',
            'salary'=>'20000'
        ],
        [
            'id'=>'2',
            'title'=>'Graphic Designer',
            'salary'=>'10000'
        ],
        [
            'id'=>'3',
            'title'=>'Accountant',
            'salary'=>'5000'
        ]
        ]
    ]);
});
Route::get('/contact', function(){
   return view('contact');
});
Route::get('/job/{id}', function($id){
    $job=[
        [
            'id'=>'1',
            'title'=>'Web Developer',
            'salary'=>'20000'
        ],
        [
            'id'=>'2',
            'title'=>'Graphic Designer',
            'salary'=>'10000'
        ],
        [
            'id'=>'3',
            'title'=>'Accountant',
            'salary'=>'5000'
        ]
    ];
    $job = Arr::first($job, fn($job) => $job['id']==$id);

    return view('job', ['job'=> $job]);
});
