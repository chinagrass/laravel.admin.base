<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/26
 * Time: 16:11
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class AdminUserModel extends Model
{
    protected $table = 'admin_user';
    protected $guarded = [];
    public $timestamps = false;
}