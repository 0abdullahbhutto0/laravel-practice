<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function(){
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs/index', ['jobs'=> $jobs]);
});
Route::post('/jobs', function(){
    //ALWAYS VALIDATE, NEVER TRUST THE USER

    Job::create([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});
Route::get('/contact', function(){
   return view('contact');
});
Route::get('jobs/create', function(){
    return view('jobs/create');
});
Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);
    $employer = Employer::find($job->employer_id);
    return view('jobs/show', ['job'=> $job, 'employer'=>$employer]);
});
