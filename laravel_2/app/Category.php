<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method hasMany(string $string)
 */
class Category extends Model
{
    protected $table='categories';
    public function posts()
    {
       return $this->hasMany('App\Post');
    }
}
