<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2/8/18
 * Time: 23:09
 */

namespace App\Filters;


use App\Filters\ProductFilters\BrandFilter;
use App\Filters\ProductFilters\ColorFilter;
use App\Filters\ProductFilters\SizeFilter;

class ProductFilters extends Filter
{
    protected $filters = [
        BrandFilter::class,
        ColorFilter::class,
        SizeFilter::class,
    ];
}