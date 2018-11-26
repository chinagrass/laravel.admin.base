<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23
 * Time: 11:33
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    public function login()
    {
        $data = ["title" => 'Admin Login'];
        return Response::view("webs.login", $data);
    }

    public function logout()
    {

    }
}