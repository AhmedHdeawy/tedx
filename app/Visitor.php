<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    
    protected $fillable = ['code', 'name', 'age', 'status', 'email', 'mobile', 'city', 'work', 'nationality', 'national_id', 'about_ted', 'prev_event', 'fav_talks', 'why_attend', 'how_spread'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'code', 'created_at', 'updated_at'
    ];
}
