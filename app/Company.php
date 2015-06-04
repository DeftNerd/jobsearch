<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

  use SluggableTrait;

  protected $sluggable = array(
      'build_from' => 'name',
      'save_to'    => 'slug',
  );

  public function tags()
  {
      return $this->morphToMany('App\Tag', 'taggable');
  }
}
