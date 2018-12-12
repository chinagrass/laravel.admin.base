<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/12
 * Time: 10:23
 */

namespace App\Libaraies;


class MakeHtml
{
    public function tohtmlfile($file_name, $file_content){

        if (is_file($file_cjjer_name)) {

            @unlink($file_cjjer_name);

        }

        $cjjer_handle = fopen($file_cjjer_name, "w");

        if (!is_writable($file_cjjer_name)) {

            return false;

        }

        if (!fwrite($cjjer_handle, $file_cjjer_content)) {

            return false;

        }

        fclose($cjjer_handle); //ЙиБежИеы

        return $file_cjjer_name;

    }
}