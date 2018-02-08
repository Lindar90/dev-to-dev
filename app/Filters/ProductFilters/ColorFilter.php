<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2/8/18
 * Time: 23:17
 */

namespace App\Filters\ProductFilters;


use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ColorFilter
{
    /**
     * @var Request
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle(Builder $builder, Closure $next)
    {
        if ($color = $this->request->input('filters.colors')) {
            $builder->where('color', $color);
        }

        return $next($builder);
    }
}