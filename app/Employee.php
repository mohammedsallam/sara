<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'employee_id';

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
