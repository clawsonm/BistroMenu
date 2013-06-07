<?php

App::uses('BistroMenuAppModel', 'BistroMenu.Model');
App::uses('Menu', 'BistroMenu.Model');

class MenuItem extends BistroMenuAppModel {
    public $displayField = 'name';

    public $validate = array(
        'item_type' => array(
            'allowedChoices' => array(
                'rule' => array('inList', array('special', 'ala carte')),
                'required' => 'true',
                'allowEmpty' => 'false',
                'message' => 'Only special or ala carte types allowed.'
            )
        ),
    );

    public $belongsTo = array(
        'Menu' => array(
            'className' => 'BistroMenu.Menu'
        ),
    );

    public $hasOne = array(
        'MenuItemSchedule' => array(
            'className' => 'BistroMenu.MenuItemSchedule',
        ),
    );

    public $hasAndBelongsToMany = array(
        'OptionCategory' => array(
            'className' => 'BistroMenu.OptionCategory',
            'joinTable' => 'menu_items_option_categories',
            'foreignkey' => 'menu_item_id',
            'associationForeignKey' => 'option_category_id',
            'unique' => true,
        ),
    );

    public function getMenu($id) {
        $options = array(
            'conditions' => array(
                'menu_id' => $id,
                'item_type' => 'special'
            ),
            'order' => array('MenuItem.name'),
        );

        $special = $this->_processSpecials($this->find('all', $options));

        $options['conditions']['item_type'] = 'ala carte';

        $ala_carte = $this->find('all', $options);

        $menuItems = compact('special', 'ala_carte');

        return $menuItems;
    }

    private function _processSpecials($specials) {
        $day_of_week = strtolower(date('l'));
        $now = new DateTime();
        foreach($specials as $key => $special) {
            //check day of week
            if($special['MenuItemSchedule'][$day_of_week] == false) {
                unset($specials[$key]);
                continue;
            }
            //check before start
            if(isset($special['MenuItemSchedule']['start_date']) && !is_null($special['MenuItemSchedule']['start_date'])
                && $now < new DateTime($special['MenuItemSchedule']['start_date'])) {
                unset($specials[$key]);
                continue;
            }
            //check after end
            if(isset($special['MenuItemSchedule']['end_date']) && !is_null($special['MenuItemSchedule']['end_date'])
                && $now > new DateTime($special['MenuItemSchedule']['end_date'])) {
                unset($specials[$key]);
                continue;
            }
        }

        return $specials;
    }

}