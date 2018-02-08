<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2/8/18
 * Time: 23:16
 */

namespace App\Filters\ProductFilters;


use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SizeFilter
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
        if ($size = $this->request->input('filters.sizes')) {
            $builder->where('size', $size);
        }

        return $next($builder);
    }
}