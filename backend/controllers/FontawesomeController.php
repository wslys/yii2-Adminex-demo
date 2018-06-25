<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18-6-22
 * Time: 下午2:14
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;

class FontawesomeController extends Controller
{
    public function actionIndex() {
        return $this->render('index', []);
    }

}
