<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 03.09.23
 * Time: 21:30
 */

namespace App\Components;


use GuzzleHttp\Client;

class ImportDataClient
{
    public $client;

    /**
     * ImportDataClient constructor.
     * @param $client
     */
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
            'verify' => false,
        ]);

    }


}
