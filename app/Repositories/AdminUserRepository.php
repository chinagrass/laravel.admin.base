<?php
namespace App\Repositories;

use App\Http\Common\ErrorCodeCommon;
use App\Models\AdminUserModel;

class AdminUserRepository extends BaseRepository
{

    public function __construct(AdminUserModel $adminUserModel)
    {
        $this->model = $adminUserModel;
    }

    /**
     * 登录检测用户
     * @param $username
     * @param $password
     * @return array
     */
    public function checkUser($username,$password)
    {
        try {
            $result = ["code"=>ErrorCodeCommon::SUCCESS,"msg"=>"登录成功！"];
            $adminUserModel = $this->model;
            $password = md5($password);// 此处将来封装成方法
            $user = $adminUserModel->where("username",$username)
                ->where("pwd",$password)
                ->first();
            if (!$user) {
                throw new \Exception("账号密码不正确",ErrorCodeCommon::SIGN_IN_ERROR);
            }
            if ($user->status != 1) {
                throw new \Exception("账号不能登陆",ErrorCodeCommon::REFUSE_SIGN_IN);
            }
        } catch (\Exception $e) {
            $result["code"] = $e->getCode();
            $result["msg"] = $e->getMessage();
        }
        return $result;
    }

}