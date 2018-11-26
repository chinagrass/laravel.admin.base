<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/26
 * Time: 14:20
 */

namespace App\Http\Middleware;

use Closure;

class ChecLogin
{
    public function handle($request, Closure $next)
    {
        if(!session('user')){
            return redirect('/');
        }
        return $next($request);
    }
}