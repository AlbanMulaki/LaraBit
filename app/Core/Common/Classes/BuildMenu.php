<?php

namespace App\Core\Common\Classes;

class BuildMenu {

    private $menu_tree;
    private static $instance = null;

    private function __construct() {
        $this->buildMenus();
    }

    /**
     * @return static instance
     */
    public static function getInstance() {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function buildMenus() {
        $this->menu_tree = [
            [
                'route' => 'users',
                'class' => 'fa fa-users',
                'name' => 'common::menu.users',
                'children' =>
                [
                    [
                        'route' => 'users.list',
                        'name' => 'common::menu.all_users'
                    ],
                    [
                        'route' => 'users.roles',
                        'name' => 'common::menu.roles'
                    ]
                ]
            ],
        ];
    }

    public function getMenus() {
        return $this->menu_tree;
    }

}
