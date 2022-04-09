<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{

    use SoftDeletes;

    protected $table = "job_applications";
    use HasFactory;
    protected $fillable = ["first_name","last_name","email","phone","date_birth","job","prev_experience"];
}
