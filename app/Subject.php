<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        // 'user_id',
        'subject'
    ];

    // public function owner(){

    //     return $this->belongsTo('App/User::class','user_id');

    // }
}
