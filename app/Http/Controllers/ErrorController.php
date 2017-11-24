<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;

class ErrorController extends Controller
{
    use Helpers;

    function __construct()
    {
    	
    }
    public function error()
    {
    	return $this->response->errorInternal();
    }
}
