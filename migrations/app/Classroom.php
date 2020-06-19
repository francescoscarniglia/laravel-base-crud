<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    // fillables = edit attr
    protected $fillable = [
        'name',
        'description'  
  ];

}
