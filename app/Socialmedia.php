<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    protected $fillable = ['icon', 'name', 'username', 'link'];
}
