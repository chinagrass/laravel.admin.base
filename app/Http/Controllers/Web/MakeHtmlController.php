<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/12
 * Time: 10:06
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class MakeHtmlController extends Controller
{
    public function index(){
        $htmlContents = Response::view("makes.index",['title'=>"hello","content"=>"hello world!"])->__toString();
        var_dump($htmlContents);die;
    }
}