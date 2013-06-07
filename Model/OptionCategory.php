<?php

class OptionCategory extends BistroMenuAppModel {

    public $displayField = 'name';

    public $belongsTo = array(
        'OptionCategoryType' => array(
            'className' => 'BistroMenu.OptionCategoryType'
        ),
    );

    public $hasMany = array(
        'Option' => array(
            'className' => 'BistroMenu.Option'
        ),
    );

    public $hasAndBelongsToMany = array(
        'MenuItem' => array(
            'className' => 'BistroMenu.MenuItem',
            'joinTable' => 'menu_items_option_categories',
            'foreignKey' => 'option_category_id',
            'associationForeignkey' => 'menu_item_id',
            'unique' => true,
        ),
    );

}