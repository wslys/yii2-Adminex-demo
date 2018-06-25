<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18-6-22
 * Time: 下午1:59
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;

class LayoutTmpController extends Controller
{
    public function actionBlankPage() {
        return $this->render('index', []);
    }
}
