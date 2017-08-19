<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 14:20
 */

namespace app\controllers;


use yii\web\Controller;

class CartController extends Controller
{
    public $layout=false;

    public function actionIndex(){
        return $this->render('index');
    }

}