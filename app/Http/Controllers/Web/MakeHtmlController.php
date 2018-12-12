<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/12
 * Time: 10:06
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class MakeHtmlController extends Controller
{
    public function index()
    {
        $fileSystem = new Filesystem();
        $dir = config("filesystems.disks.public.root") . "/home";
        $fileSystem->makeDirectory($dir);
        $htmlContents = view("webs.makes.index", ['title' => "hello", "content" => "hello world!"])->__toString();
        $fileSystem->replace($dir."test.html",$htmlContents);

    }
}