<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  //allows these database items to be filled in in a HTML form in the view
    protected $fillable = [
      'land_owners_username',
      'event_date',
      'event_time',
      'location'
    ];
}
