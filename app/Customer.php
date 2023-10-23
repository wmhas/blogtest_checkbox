<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Organization;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'category',
        'organization_id',
        'email'

       ];

       public function getRouteKeyName()
       {
           return 'slug';
       }

    public function organization(){
        return $this->belongsTo('Organization', 'organization_id');
    }
}
