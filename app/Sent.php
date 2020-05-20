<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sent extends Model
{
    protected $fillable = ['name','subject','frommail','editor1'];
}
