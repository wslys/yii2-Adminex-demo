<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_menus".
 *
 * @property int $id
 * @property int $user_id
 * @property int $menu_id
 */
class UserMenus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_menus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'menu_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'menu_id' => 'Menu ID',
        ];
    }
}
