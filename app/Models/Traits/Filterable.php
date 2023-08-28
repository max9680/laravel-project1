<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 28.08.23
 * Time: 15:20
 */

namespace App\Models\Traits;


use App\Http\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    /**
     * @param Builder $builder
     * @param FilterInterface $filter
     *
     * @return Builder
     */
    public function scopeFilter(Builder $builder, FilterInterface $filter)
    {
        $filter->apply($builder);

        return $builder;
    }
}
