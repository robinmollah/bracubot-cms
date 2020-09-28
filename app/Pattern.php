<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    protected $table = 'patterns';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
