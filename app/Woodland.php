<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Woodland;

class Woodland extends Model
{
  //allows these database fields to be added to from the HTML form in the view
    protected $fillable = [
      'name',
      'longitude_and_latitude',
      'description',
      'facilities'
    ];
}
