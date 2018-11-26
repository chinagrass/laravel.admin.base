<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Response;

class IndexController extends WebController
{
    public function index()
    {
        return Response::view("webs.index");
    }
}
