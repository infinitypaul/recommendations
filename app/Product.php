<?php

namespace App;

use App\Filters\ProductFilter;
use Illuminate\Database\Eloquent\Model;

/**
 * @method  static mixed  tag($city)
 */
class Product extends Model
{

    protected $guarded = ['id'];

    public function scopeTag($query, $city){
        return $query->where('tags', "LIKE", "%$city%");
    }
}
