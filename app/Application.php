<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  public function tags()
  {
      return $this->morphToMany('App\Tag', 'taggable');
  }
}
