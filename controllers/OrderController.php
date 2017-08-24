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

    public function actionIndex(){
        $this->layout = 'layouts2';
        return $this->render('index');
    }

    public function actionCheck(){
        $this->layout = 'layouts1';
        return $this->render('check');
    }

}