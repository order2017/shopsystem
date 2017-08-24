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

    public function actionIndex(){
        $this->layout = 'layouts1';
        return $this->render('index');
    }

}