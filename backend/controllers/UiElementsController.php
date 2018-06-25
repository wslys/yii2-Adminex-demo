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

class UiElementsController extends Controller
{
    public function actionGeneral() {
        return $this->render('general', []);
    }

    public function actionButtons() {
        return $this->render('buttons', []);
    }

    public function actionTabsAccordions() {
        return $this->render('tabs-accordions', []);
    }

    public function actionTypography() {
        return $this->render('typography', []);
    }

    public function actionSlider() {
        return $this->render('slider', []);
    }

    public function actionPanels() {
        return $this->render('panels', []);
    }

    public function actionWidgets() {
        return $this->render('widgets', []);
    }
}
