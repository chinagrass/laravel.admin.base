<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/27
 * Time: 9:19
 */

namespace App\Http\Controllers\Web;


use App\Models\AdminUserModel;
use App\Repositories\AdminUserRepository;
use App\Repositories\RegisterRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends WebController
{
    /**
     * @var AdminUserRepository
     */
    private $user;
    public function __construct()
    {
        parent::__construct();
        $this->user = RegisterRepository::get("admin_user_repository");
        if (!$this->user) {
            $model = new AdminUserModel();
            $this->user = new AdminUserRepository($model);
            RegisterRepository::set("admin_user_repository", $this->user);
        }
    }
    public function dataList(Request $request)
    {
        $user = $this->getUser();
        $dataList = $user->dataList();
        return Response::view("webs.users.list",['users'=>$dataList]);
    }

    /**
     * @return AdminUserRepository|bool
     */
    public function getUser()
    {
        return $this->user;
    }
}