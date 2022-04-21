<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoryModel;

class menuModel extends Model
{
    use HasFactory;
    public function getCat(){

        // return $this->hasMany('App\Models\categoryModel','id','cat_id');
    
    
        return $this->hasMany('App\Models\categoryModel'::class, 'id','cat_id');
    } 
}
