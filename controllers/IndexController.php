<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/17
 * Time: 21:40
 */

namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public $layout=false;

    public function actionIndex(){
        return $this->render('index');
    }
}