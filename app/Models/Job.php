<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    public function jobcategory()
    {
        return $this->hasMany('App\Models\JobCategory', 'job_category_id');
    }
}
