<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'address'

    ];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }


}
