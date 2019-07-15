<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    $fillable = ['title', 'description', 'images', 'start_date', 'end_date'];
}
