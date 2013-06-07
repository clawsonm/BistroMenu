<?php

App::uses('BistroMenuAppController', 'BistroMenu.Controller');
App::uses('Menu', 'BistroMenu.Model');

class MenusController extends BistroMenuAppController {
    public $scaffold = 'admin';

    public $helpers = array('Time');

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('index', 'view');

    }

    public function index() {
        $this->Menu->recursive = -1;
        $menus = $this->Menu->find('all');
        $this->set('menus', $menus);
    }

    public function view($id = null) {
        if(!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Cannot View Menu: Menu Not Found'));
        }

        $this->Menu->recursive = -1;
        $menu = $this->Menu->findById($id);
        $this->set('menu', $menu);

        $menuItems = $this->Menu->MenuItem->getMenu($id);
        $this->set('menuItems', $menuItems);
    }

}