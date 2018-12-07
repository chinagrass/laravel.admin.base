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
    /**
     * µÇÂ¼½çÃæ
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function login()
    {
        $user = session('user');
        if (!empty($user) && !empty($user['username'])) {
            return redirect('/');
        }
        $data = ["title" => 'Admin Login', 'formName' => 'Sign In WeiGo Admin'];
        return Response::view("webs.login", $data);
    }
}