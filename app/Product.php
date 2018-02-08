<?php

namespace App;

use App\Filters\ProductFilters;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product filter($filters)
 */
class Product extends Model
{
    public function scopeFilter($query, ProductFilters $filters)
    {
        return $filters->apply($query);
    }
}
