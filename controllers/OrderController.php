<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 14:27
 */

namespace app\controllers;


use yii\web\Controller;

class OrderController extends Controller
{
    public $layout=false;

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionCheck(){
        return $this->render('check');
    }

}