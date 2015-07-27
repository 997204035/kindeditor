<?php

use Illuminate\Support\Facades\URL;

return [

    'upload' => [
        //允许上传的文件格式
        'ext_arr'=>[
            'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
            'flash' => array('swf', 'flv'),
            'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
            'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2')
        ],

        //最大文件大小
        'max_size'=>1000000,

        //文件存储目录
        'upload_dir'=>'../../../uploads',
    ],


    'editor' => [

        'allowFileManager' => true

    ]






];