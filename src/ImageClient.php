<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/18
 * Time: 16:44
 */
namespace ImageCompound;
require_once 'ImageCompound/Image/Ima.php';
class ImageClient{
    public function clientinfo()
    {
        echo 'class ImaageClient clientinfo ';
        $f=new \ImageCompound\Image\Ima();
        $f->info();
        mkdir('fdff', 7777);
    }
}