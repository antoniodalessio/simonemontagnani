<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PageSections extends Model
{

	protected $fillable = [
        'ord',
        'type_id',
        'img',
        'img_2' // ugly but laravel-admin bug
    ];

    public function page()
    {
        return $this->belongsTo('App\Page');
    }

    // This function is unsuported by laravel-admin why it doesn't allow to nested hasMany inside hasMany form...waiting for this
    public function images()
    {
        return $this->hasMany('App\SectionImages', 'page_sections_id');
    }

}
