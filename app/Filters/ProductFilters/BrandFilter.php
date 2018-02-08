<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2/8/18
 * Time: 23:11
 */

namespace App\Filters\ProductFilters;


use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BrandFilter
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
        if ($brand = $this->request->input('filters.brands')) {
            $builder->where('brand', $brand);
        }

        return $next($builder);
    }
}