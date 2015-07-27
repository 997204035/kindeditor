<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/7/27
 * Time: 16:40
 */

use Jiangxianli\Kindeditor\FileManagerJson;
use Illuminate\Routing\Controller;
use Jiangxianli\Kindeditor\UploadJson;

class KindeditorController extends  Controller{

    public function fileManager(){
        new FileManagerJson();
    }

    public function fileUpload(){

        new UploadJson([]);
    }


} 