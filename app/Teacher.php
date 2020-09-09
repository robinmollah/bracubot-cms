<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'initial';
    protected $keyType = 'string';
    public $timestamps = false;
}
