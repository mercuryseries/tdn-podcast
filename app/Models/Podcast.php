<?php

namespace App\Models;

use Jenssegers\Date\Date;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];

    public function isPublished()
    {
        return $this->published_at <= Carbon::now();
    }

    public function getPublishedAtAttribute($value)
    {
        return new Date($value);
    }

    /**
     * Return only published podcasts
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder $query
     */
    public function scopePublished($query)
    {
        return $query->whereDate('published_at', '<=', Carbon::now());
    }
}
