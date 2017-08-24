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
    public function actionIndex(){
        $this->layout = "layouts1";
        return $this->render('index');
    }
}