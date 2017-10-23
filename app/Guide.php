<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    
    /**
     * Returns the country this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country() {
      return $this->belongsTo('App\Country');
    }

    /**
     * Returns the region this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
      return $this->belongsTo('App\Region');
    }

    /**
     * Returns the guide_items this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guide_items() {
      return $this->hasMany('App\GuideItem');
    }

    /** Get the featured guides. */
    public function scopeFeatured($query) {
        return $query->select('id', 'title', 'image', 'country_id', 'issue')
                     ->orderBy('created_at')->get();
    }

}
