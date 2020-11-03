<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
