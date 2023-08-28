<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 28.08.23
 * Time: 12:52
 */

namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    public function apply(Builder $builder);
}
