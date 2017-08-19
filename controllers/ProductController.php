<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 14:05
 */

namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public $layout=false;

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionDetail(){
        return $this->render('detail');
    }

}