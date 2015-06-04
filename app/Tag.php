<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
      /**
       * Get all of the companies that are assigned this tag.
       */
      public function companies()
      {
          return $this->morphedByMany('App\Company', 'taggable');
      }

      /**
       * Get all of the companies that are assigned this tag.
       */
      public function jobs()
      {
          return $this->morphedByMany('App\Job', 'taggable');
      }

      /**
       * Get all of the companies that are assigned this tag.
       */
      public function applications()
      {
          return $this->morphedByMany('App\Application', 'taggable');
      }

      /**
       * Get all of the companies that are assigned this tag.
       */
      public function contacts()
      {
          return $this->morphedByMany('App\Contact', 'taggable');
      }

}
