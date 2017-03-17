<?php
namespace app\controllers;
use yii\web\Controller;

class ComBaseController extends  Controller
{
    function init()
    {
        require "../Qiniu/functions.php";
        parent::init(); // TODO: Change the autogenerated stub
        // 指定允许其他域名访问
        header('Access-Control-Allow-Origin:*');
        // 响应类型
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type,if-modified-since');
    }
}