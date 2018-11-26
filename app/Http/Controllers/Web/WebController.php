<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/26
 * Time: 11:11
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class WebController extends Controller
{
    /**
     * 实例化一个控制器实例
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('CheckLogin');
    }
}