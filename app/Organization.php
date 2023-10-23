<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'address'

    ];

    public function customers(){
        return $this->hasMany(Customer::class);
    }


}
