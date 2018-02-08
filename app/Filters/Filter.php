<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2/8/18
 * Time: 23:01
 */

namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pipeline\Pipeline;

abstract class Filter
{
    protected $filters = [];

    public function apply(Builder $builder)
    {
        return (new Pipeline(app()))
            ->send($builder)
            ->through($this->filters)
            ->then(function ($builder) {
                return $builder;
            });
    }
}