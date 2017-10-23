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

    /**
     * Returns the guides this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guides() {
      return $this->hasMany('App\Guide');
    }

}
