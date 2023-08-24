<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 24.08.23
 * Time: 17:24
 */

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Services\Post\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
