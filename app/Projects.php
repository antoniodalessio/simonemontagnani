<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        
    ];

    protected $guarded = array();

    // public function images()
    // {
    //     return $this->hasMany('App\PagesImages');
    // }
}
