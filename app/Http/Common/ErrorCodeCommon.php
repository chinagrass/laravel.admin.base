<?php

namespace App\Http\Common;

class ErrorCodeCommon
{
    const SUCCESS = 0;  // 成功
    const ADD_ERROR = 1001; // 添加失败
    const DEL_ERROR = 1002; // 删除失败
    const UPDATE_ERROR = 1003; // 更新失败
    const SELECT_ERROR = 1004; // 查询失败
    const SIGN_IN_ERROR = 2001;// 登录失败
    const REFUSE_SIGN_IN = 2002;// 拒绝登录
    const PARAM_ERROR = 4001; // 参数错误
    const URL_ERROR = 5000; // 访问地址不正确
    const UN_READ_POWER = 6000; // 没有查看权限
    const UN_EDIT_POWER = 6001; // 没有编辑权限
    const UN_DEL_POWER = 6002; // 没有删除权限
    const UN_ADD_POWER = 6003; // 没有添加权限
}