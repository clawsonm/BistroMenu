<?php

class OptionCategoryType extends BistroMenuAppModel {
    public $displayField = 'name';

    public $belongsTo = array(
        'Menu' => array(
            'className' => 'BistroMenu.Menu'
        ),
    );

    public $hasMany = array(
        'OptionCategory' => array(
            'className' => 'BistroMenu.OptionCategory'
        ),
    );

}