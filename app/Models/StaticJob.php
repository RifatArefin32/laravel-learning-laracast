<?php

namespace App\Models;

use Illuminate\Support\Arr;

class StaticJob
{
    public static function all()
    {
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

    public static function find($id)
    {
        $jobs = static::all();
        $job = Arr::first($jobs, function ($job) use ($id) {
            return $job['id'] == $id;
        });

        if(!$job) abort(404);
        
        return $job;
    }
}
