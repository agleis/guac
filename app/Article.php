<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $primaryKey = 'name';

    public $incrementing = false;

    /**
     * Returns the user this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user() {
      return $this->belongsTo('App\User');
    }

    /**
     * Returns the current featured articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query) {
        return $query->select('name', 'title', 'summary', 'image', 'user_id')
                     ->where('featured', 1)
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the list of all articles sorted by date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeList($query) {
        return $query->select('name', 'title', 'summary', 'image', 'user_id', 'featured')
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the text and title and user of a single article.
     *
     * @param string $name
     * @return array
     */
    public function scopeText($query, $name) {
        return $query->select('text', 'title', 'user_id', 'name')
                     ->where('name', $name)->first();
    }

}
