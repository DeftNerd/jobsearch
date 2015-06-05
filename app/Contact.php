<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

  public function tags()
  {
      return $this->morphToMany('App\Tag', 'taggable');
  }

  public function job()
    {
        return $this->belongsTo('App\Job');
    }

}
