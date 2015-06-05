<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Job extends Model implements SluggableInterface
{

  use SluggableTrait;

  protected $sluggable = array(
      'build_from' => 'title',
      'save_to'    => 'slug',
  );

  protected $fillable = [
                          'applied_at',
                          'company_id',
                          'contact_email',
                          'contact_name',
                          'contact_phone',
                          'cover_letter',
                          'description',
                          'listed_at',
                          'location',
                          'notes_private',
                          'notes_public',
                          'resume_url',
                          'stage',
                          'title',
                          'url',
                          ];
  protected $dates = ['listed_at', 'applied_at'];

  public function tags()
  {
    return $this->morphToMany('App\Tag', 'taggable');
  }

  public function company()
  {
    return $this->belongsTo('App\Company');
  }

  public function contacts()
  {
    return $this->hasMany('App\Contact');
  }

}
