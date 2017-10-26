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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
      return $this->belongsTo('App\User');
    }

    /**
     * Returns the category this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
      return $this->belongsTo('App\Category');
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
     * Returns the current featured articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query) {
        return $query->select('name', 'title', 'image', 'user_id', 'category_id', 'issue')
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the next article after $created_at.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNext($query, $created_at) {
        return $query->select('name')
                     ->where('created_at', '>', $created_at)
                     ->oldest();
    }

    /**
     * Returns the previous article before $created_at.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePrev($query, $created_at) {
        return $query->select('name')
                     ->where('created_at', '<', $created_at)
                     ->latest();
    }

    /**
     * Returns the list of all articles sorted by date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeList($query) {
        return $query->select('name', 'title', 'image', 'user_id', 'featured')
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the list of all articles sorted by date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search) {
        return $query->select('name', 'title', 'image', 'user_id', 'category_id', 'issue')
                     ->where('title', 'like', "%$search%")
                     ->orWhere('text', 'like', "%$search%")
                     ->orWhereHas('category', function($query) use($search) {
                         $query->where('name', 'like', "%$search%");
                     })
                     ->orWhereHas('region', function($query) use($search) {
                         $query->where('name', 'like', "%$search%");
                     })
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
