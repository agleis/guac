<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    /**
     * Returns the users this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {
      return $this->belongsToMany('App\User');
    }

}
