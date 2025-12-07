<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'title' => 'Web Developer',
                'salary' => '20000'
            ],
            [
                'id' => '2',
                'title' => 'Graphic Designer',
                'salary' => '10000'
            ],
            [
                'id' => '3',
                'title' => 'Accountant',
                'salary' => '5000'
            ]
        ];
    }

    public static function find($id){

        $job = Arr::first(static::all(), fn($job)=> $job['id']==$id);
        if(! $job){
            abort(404);
        }
        return $job;
    }

}