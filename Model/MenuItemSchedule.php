<?php

class MenuItemSchedule extends BistroMenuAppModel {

    public $belongsTo = array(
        'MenuItem' => array(
            'className' => 'BistroMenu.MenuItem',
        ),
    );

}