<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/27
 * Time: 9:19
 */

namespace App\Http\Controllers\Web;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends WebController
{

    public function dataList(Request $request)
    {
        return Response::view("webs.users.list");
    }
}