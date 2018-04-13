<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PagesImages extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['img', 'ord'];


    public function page()
    {
        return $this->belongsTo('App\Page');
    }

}
