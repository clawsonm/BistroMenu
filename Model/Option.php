<?php

class Option extends BistroMenuAppModel {

    public $displayField = 'name';

    public $belongsTo = array(
        'OptionCategory' => array(
            'className' => 'BistroMenu.OptionCategory'
        ),
    );

}