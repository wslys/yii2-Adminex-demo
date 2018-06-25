<?php
namespace common\components;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18-6-21
 * Time: 下午4:25
 */

class LeftMenus
{
    public function getMenus() {
        $user_id = \Yii::$app->user->identity->getId();

        $menus = (new \yii\db\Query())
            ->select(['id', 'email'])
            ->from('user_menus')
            ->leftJoin('menus', 'user_menus.user_id = menus.user_id')
            ->where(['user_menus.id' => $user_id])
            ->all();

        return $menus;
    }
}
