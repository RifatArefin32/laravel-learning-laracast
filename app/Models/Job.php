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
    protected $fillable = ['title', 'employer_id', 'salary', 'currency', 'description'];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey:'job_item_id');
    }
}
