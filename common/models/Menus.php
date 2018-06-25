<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menus".
 *
 * @property int $id
 * @property string $name 资源名称
 * @property string $url 资源 URL
 * @property string $icon 菜单图标
 * @property int $type 类型 1：菜单， 2：按钮/链接
 * @property int $sort 排序
 * @property string $note 备注
 * @property int $parent_id 父菜单ID， 一级菜单未0
 * @property string $permission 授权（如：role:create）
 * @property int $create_user 创建用户
 * @property int $update_user 修改用户
 * @property string $create_at 创建时间
 * @property string $update_at 修改时间
 */
class Menus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'sort', 'parent_id', 'create_user', 'update_user'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'url', 'icon', 'note'], 'string', 'max' => 255],
            [['permission'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '资源名称',
            'url' => '资源 URL',
            'icon' => '菜单图标',
            'type' => '类型 1：菜单,2：按钮/链接',
            'sort' => '排序',
            'note' => '备注',
            'parent_id' => '父菜单ID',
            'permission' => '授权（如：role:create）',
            'create_user' => '创建用户',
            'update_user' => '修改用户',
            'create_at' => '创建时间',
            'update_at' => '修改时间',
        ];
    }

    /**
     * 获取用户菜单
     * @return array
     */
    public static function getMenus() {
        $action = Yii::$app->controller->action->id;
        $controller = Yii::$app->controller->id;
        $_url = "/" . $controller . "/" . $action;

        $user_id = \Yii::$app->user->identity->getId();

        $menus = (new \yii\db\Query())
            ->select('menus.* ')
            ->from('user_menus')
            ->leftJoin('menus', 'user_menus.menu_id = menus.id')
            ->where(['user_menus.user_id' => $user_id, 'type'=>1])
            ->orderBy('menus.parent_id, menus.sort')
            ->all();

        $menu_list = [];
        foreach ($menus as $menu) {
            if (!isset($menu_list[$menu['parent_id']])) {
                $menu_list[$menu['parent_id']] = [];
            }

            $menu_list[$menu['parent_id']][] = $menu;
        }

        $menu_tree = [];
        foreach ($menu_list[0] as $item) {
            $item['children'] = [];
            $menu_tree[] = $item;
        }

        for($i=0; $i<count($menu_tree); $i++) {
            $menu_tree[$i]['action'] = 0;
            foreach ($menu_list as $item) {
                foreach ($item as $ite) {
                    $ite['action'] = 0;
                    if ($ite['parent_id'] == $menu_tree[$i]['id']) {
                        if ($_url == $ite['url']) {
                            $ite['action'] = 1;
                            $menu_tree[$i]['action'] = 1;
                        }
                        $menu_tree[$i]['children'][] = $ite;
                        // $_url
                    }
                }
            }
        }

        return $menu_tree;
    }
}
