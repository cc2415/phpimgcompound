<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 16:44
 */
namespace ImageCompound;
require_once 'Image/Ima.php';
class ImageClient{
    public function __construct()
    {
        echo '-----construct----ok';
    }


    public function clientinfo()
    {
        echo 'class ImaageClient clientinfo '."<br>";
        $f=new \ImageCompound\Image\Ima();
        $f->info();
        if(!file_exists('fdff')) {
            mkdir('fdff', 7777);
        }
    }
}

$a = new ImageClient();
//$a->clientinfo();