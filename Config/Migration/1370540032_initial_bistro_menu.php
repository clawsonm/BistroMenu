<?php
class InitialBistroMenu extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
                    'create_table' => array(
                        //MENUS
                        'menus' => array(
                            'id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                                'key' => 'primary'
                            ),
                            'name' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 50
                            ),
                            'start_time' => array(
                                'type' => 'time',
                                'null' => false,
                            ),
                            'end_time' => array(
                                'type' => 'time',
                                'null' => false,
                            ),
                            'created' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'modified' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        ),
                        //MENU_ITEMS
                        'menu_items' => array(
                            'id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                                'key' => 'primary'
                            ),
                            'menu_id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                            ),
                            'item_type' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 10
                            ),
                            'name' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 50
                            ),
                            'description' => array(
                                'type' => 'text',
                                'null' => false,
                            ),
                            'price' => array(
                                'type' => 'float',
                                'length' => '8,2',
                                'null' => false
                            ),
                            'created' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'modified' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        ),
                        //MENU_ITEMS_OPTION_CATEGORIES
                        'menu_items_option_categories' => array(
                            'id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                                'key' => 'primary'
                            ),
                            'menu_item_id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                            ),
                            'option_category_id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        ),
                        //MENU_ITEM_SCHEDULES
                        'menu_item_schedules' => array(
                            'id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                                'key' => 'primary'
                            ),
                            'menu_item_id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                            ),
                            'monday' => array(
                                'type' => 'boolean',
                                'null' => false,
                                'default' => '0'
                            ),
                            'tuesday' => array(
                                'type' => 'boolean',
                                'null' => false,
                                'default' => '0'
                            ),
                            'wednesday' => array(
                                'type' => 'boolean',
                                'null' => false,
                                'default' => '0'
                            ),
                            'thursday' => array(
                                'type' => 'boolean',
                                'null' => false,
                                'default' => '0'
                            ),
                            'friday' => array(
                                'type' => 'boolean',
                                'null' => false,
                                'default' => '0'
                            ),
                            'start_date' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'end_date' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'created' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'modified' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        ),
                        //OPTIONS
                        'options' => array(
                            'id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                                'key' => 'primary'
                            ),
                            'option_category_id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                            ),
                            'name' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 50
                            ),
                            'price' => array(
                                'type' => 'float',
                                'length' => '8,2',
                                'null' => false
                            ),
                            'created' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'modified' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        ),
                        //OPTION_CATEGORIES
                        'option_categories' => array(
                            'id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                                'key' => 'primary'
                            ),
                            'option_category_type_id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                            ),
                            'name' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 50
                            ),
                            'max_quantity' => array(
                                'type' => 'integer',
                                'null' => false,
                            ),
                            'optional' => array(
                                'type' => 'boolean',
                                'null' => false,
                                'default' => '0'
                            ),
                            'created' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'modified' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        ),
                        //OPTION_CATEGORY_TYPES
                        'option_category_types' => array(
                            'id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                                'key' => 'primary'
                            ),
                            'menu_id' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 36,
                            ),
                            'name' => array(
                                'type' => 'string',
                                'null' => false,
                                'length' => 50
                            ),
                            'created' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'modified' => array(
                                'type' => 'datetime',
                                'null' => true,
                                'default' => NULL
                            ),
                            'indexes' => array(
                                'PRIMARY' => array(
                                    'column' => 'id',
                                    'unique' => 1
                                )
                            )
                        ),
                    )
		),
		'down' => array(
                    'drop_table' => array(
                        'menus',
                        'menu_items',
                        'menu_items_option_categories',
                        'menu_item_schedules',
                        'options',
                        'option_categories',
                        'option_category_types',
                    )
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
