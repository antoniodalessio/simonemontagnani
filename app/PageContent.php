<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PageContent extends Model
{

	protected $fillable = [
        'slug', 'title', 'subtitle', 'content'
    ];

    public function page()
    {
        return $this->belongsTo('App\Page');
    }

    public function langs()
    {
        return $this->belongsTo('App\Langs');
    }
}
