<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * laravel has previously a table named `jobs` 
     * This table is created by the system.
     * So we have to create another table name `job_items`
     * and specify it in the class definition
     */
    protected $table = 'job_items'; 
    protected $fillable = ['title', 'salary', 'currency', 'description'];
}
