<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Organization;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category',
        'email'
       ];
   
       public function getRouteKeyName()
       {
           return 'slug';
       }

    public function organizations(){
        return $this->hasMany('Organization');
    }
}
