<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $fillable = [

      'brand',
      'model',
      'display',
      'mem_ext'
    ];
}
