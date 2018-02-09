<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'template'
    ];

    public function contents()
    {
        return $this->hasMany('App\PageContent');
    }
}
