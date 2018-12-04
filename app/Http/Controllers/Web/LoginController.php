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
        if (!session('user')) {
            return redirect('/login');
        }
        $data = ["title" => 'Admin Login', 'formName' => 'Sign In WeiGo Admin'];
        return Response::view("webs.login", $data);
    }
}