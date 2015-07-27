<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/7/27
 * Time: 15:08
 */

namespace Jiangxianli\Kindeditor;


class Kindeditor {

    public static $ASSET_PATH = 'packages/jiangxianli/kindeditor';

    public static function content($config){

        $element = $config['element'];
            $config = array_merge(\Config::get('kindeditor::upload'),$config);
//        $allowFileManager = $config['allowFileManager'];
//        $fileManagerJson = $config['fileManagerJson'];
//        $themeType = $config['themeType'];
//        $items = $config['items'];
//        $readonlyMode = $config['readonlyMode'];
//        $resizeType = $config['readonlyMode'];
//		$allowPreviewEmoticons = $config['readonlyMode'];
//		$allowImageUpload  = $config['readonlyMode'];


        return
        "<script>".
        "KindEditor.ready(function(K) {

            K.create('".$element."', {
        "
//        .($themeType ? 'themeType:'.$themeType :'').''
//        .($allowFileManager ? 'allowFileManager:'.$allowFileManager :'').''
//        .($fileManagerJson ? 'fileManagerJson:'.$fileManagerJson :'').''
//        .($allowFileManager ? 'allowFileManager:'.$allowFileManager :'').''
//        .($items ? 'items:'.$items :'').''
//        .($allowFileManager ? 'allowFileManager:'.$allowFileManager :'').''
        ."
            });

		});".
        "</script>";
    }



    public  static  function css(){

        return '<link href="'. asset(self::$ASSET_PATH.'/themes/default/default.css') .'" type="text/css" rel="stylesheet">';
    }

    public static function js(){

        return '<script charset="utf-8" src="'. asset(self::$ASSET_PATH.'/kindeditor-min.js') .'"></script>';

    }

    public static function lang($lang='zh_CN'){

        return '<script charset="utf-8" src="'. asset(self::$ASSET_PATH.'/lang/'.$lang.'.js') .'"></script>';
    }

} 