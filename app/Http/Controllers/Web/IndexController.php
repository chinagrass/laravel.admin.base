<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class IndexController extends WebController
{
    public function index(Request $request)
    {
        return Response::view("webs.index");
    }
}
