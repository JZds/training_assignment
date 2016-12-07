<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = array('title', 'description', 'user_id');

    protected $table = 'advertisements';
}
