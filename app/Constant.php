<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{

    protected $primaryKey = 'name';

    public $incrementing = false;

    /**
     * Gets the content of the named constant.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $name
     * @return array
     */
    public function scopeName($query, $name) {
        return $query->where('name', $name)->first();
    }

}
