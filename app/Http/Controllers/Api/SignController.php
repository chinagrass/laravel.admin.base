<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/26
 * Time: 15:39
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdminUserModel;
use App\Repositories\AdminUserRepository;
use App\Repositories\RegisterRepository;
use Illuminate\Http\Request;

class SignController extends Controller
{
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
        $result = $adminUserRepository->checkUser($username, $pwd);
        return $result;

    }

    public function signOut()
    {

    }
}