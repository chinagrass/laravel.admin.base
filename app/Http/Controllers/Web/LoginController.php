<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23
 * Time: 11:33
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return Response::view("webs.login");
    }
    public function logout()
    {

    }
}