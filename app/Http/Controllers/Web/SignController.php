<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/26
 * Time: 15:39
 */

namespace App\Http\Controllers\Web;

use App\Http\Common\ErrorCodeCommon;
use App\Http\Controllers\Controller;
use App\Models\AdminUserModel;
use App\Repositories\AdminUserRepository;
use App\Repositories\RegisterRepository;
use Illuminate\Http\Request;

class SignController extends Controller
{
    /**
     * 登录
     * @param Request $request
     * @return array
     */
    public function signIn(Request $request)
    {
        $username = $request->input("username", "");
        $pwd = $request->input("password", "");
        $adminUserRepository = RegisterRepository::get("admin_user_repository");
        if (!$adminUserRepository) {
            $model = new AdminUserModel();
            $adminUserRepository = new AdminUserRepository($model);
            RegisterRepository::set("admin_user_repository", $adminUserRepository);
        }
        if ($adminUserRepository instanceof AdminUserRepository) {
            $result = $adminUserRepository->signIn($username, $pwd);
        }
        if (isset($result["code"]) && $result["code"] == ErrorCodeCommon::SUCCESS) {
            return redirect("/");
        }
        return redirect("/login");
    }

    /**
     * 登出
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function signOut(Request $request)
    {
        $request->session()->flush();// 清空session
        return redirect("login"); // 重定向到登录页面
    }
}