<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = array('name');

    public function products(){

        return $this->belongsToMany('CodeCommerce\Product');
    }


}
