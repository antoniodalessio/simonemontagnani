<?php

namespace App;

use App\Page;

class Projects extends Page
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'pages';

    protected $fillable = [
        'name', 'template'
    ];

    public function type() {
        return $this->hasOne('App\ProjectRelType', 'page_id');
    }

    public function imagesections()
    {
        return $this->hasMany('App\PageSections', 'page_id');
    }

}
