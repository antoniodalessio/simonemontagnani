<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SectionImages extends Model
{

	protected $fillable = [
        'img',
        'title',
    ];


    public function section() {
        return $this->belongTo('App\PageSections');
    }

}
