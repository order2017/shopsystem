<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29
 * Time: 21:18
 */

namespace app\modules\controllers;

use app\modules\models\Admin;
use yii\web\Controller;

class PublicController extends Controller
{
    public function actionLogin(){
        $this->layout = false;
        $model = new Admin();
        return $this->render('login',['model'=>$model]);
    }
}