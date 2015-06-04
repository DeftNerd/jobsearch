<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

  use SluggableTrait;

  protected $sluggable = array(
      'build_from' => 'title',
      'save_to'    => 'slug',
  );

  public function tags()
  {
      return $this->morphToMany('App\Tag', 'taggable');
  }
}
