<?php

App::uses('BistroMenuAppModel', 'BistroMenu.Model');
App::uses('MenuItem', 'BistroMenu.Model');

class Menu extends BistroMenuAppModel {
    public $displayField = 'name';

    public $hasMany = array(
        'MenuItem' => array(
            'className' => 'BistroMenu.MenuItem',

        ),
        'OptionCategoryType' => array(
            'className' => 'BistroMenu.OptionCategoryType'
        ),
    );

}