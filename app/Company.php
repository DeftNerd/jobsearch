<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Company extends Model implements SluggableInterface
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
