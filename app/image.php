<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'image';
    public $fillable = ['pname','pdes','image'];
}
