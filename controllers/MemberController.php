<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 14:36
 */

namespace app\controllers;


use yii\web\Controller;

class MemberController extends Controller
{

    public function actionIndedx(){
        $this->layout = false;
        return $this->render('index');
    }

    public function actionAuth(){
        $this->layout = 'layouts2';
        return $this->render('auth');
    }

}