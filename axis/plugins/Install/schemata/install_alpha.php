<?php

/**
 * Look into 'ON UPDATE CURRENT_TIMESTAMP' attribute
 */

$schema['0.01']['create']['database'] = [
    'name' => $dbInsertDatabase,
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
];

$schema['0.01']['create']['table']['blocks'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'name',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'venue_id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'plugin_id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'description',
        'type' => 'text',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'block_area',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'block_order',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'active',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['languages'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'name',
        'type' => 'varchar(20)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'folder_name',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['links'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'label',
        'type' => 'varchar(50)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'url',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'comment',
        'type' => 'text',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'link_parent',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'link_area',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'link_order',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'active',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['permissions'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'name',
        'type' => 'varchar(50)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'description',
        'type' => 'varchar(255)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['plugins'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'name',
        'type' => 'varchar(50)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'version',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'folder_path',
        'type' => 'varchar(255)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'folder_name',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'description',
        'type' => 'text',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'developer',
        'type' => 'varchar(50)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'developer_email',
        'type' => 'varchar(100)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'developer_site',
        'type' => 'varchar(100)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'active',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '2',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['roles'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'name',
        'type' => 'varchar(50)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'description',
        'type' => 'varchar(255)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['role_perm'] = [
    [
        'name' => 'role_id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'perm_id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['schemas'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'system_name',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'schema_version',
        'type' => 'varchar(20)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['themes'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'name',
        'type' => 'varchar(50)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'version',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'folder_path',
        'type' => 'varchar(255)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'folder_name',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'description',
        'type' => 'text',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'artist',
        'type' => 'varchar(50)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'artist_email',
        'type' => 'varchar(100)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'artist_site',
        'type' => 'varchar(100)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'active',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['users'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'login_name',
        'type' => 'varchar(20)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'display_name',
        'type' => 'varchar(50)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'password',
        'type' => 'varchar(125)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'email_address',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'hide_email_address',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '2',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'timezone_offset',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'last_login_time',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'last_ip',
        'type' => 'varchar(20)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'registration_ip',
        'type' => 'varchar(20)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['user_role'] = [
    [
        'name' => 'user_id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'role_id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

$schema['0.01']['create']['table']['venues'] = [
    [
        'name' => 'id',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '1',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '1',
    ],
    [
        'name' => 'name',
        'type' => 'varchar(20)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'title',
        'type' => 'varchar(50)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'tagline',
        'type' => 'varchar(200)',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'description',
        'type' => 'text',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'keywords',
        'type' => 'text',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'venue_admin',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'venue_email',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '1',
        'primary_key' => '',
    ],
    [
        'name' => 'venue_email_name',
        'type' => 'varchar(100)',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => '',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'default_plugin',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'active_theme',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'maintenance_flag',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'maintenance_flag_text',
        'type' => 'text',
        'not_null' => '',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'NULL',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'language',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '1',
        'index_key' => '1',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'active',
        'type' => 'int(11)',
        'not_null' => '1',
        'unsigned' => '1',
        'autoincrement' => '',
        'default' => '2',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'created',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => "'0000-00-00 00:00:00'",
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
    [
        'name' => 'modified',
        'type' => 'timestamp',
        'not_null' => '1',
        'unsigned' => '',
        'autoincrement' => '',
        'default' => 'CURRENT_TIMESTAMP',
        'index_key' => '',
        'unique_key' => '',
        'primary_key' => '',
    ],
];

/*
// @todo: ???Need to implement (This is just for Updates after initial installation)???
$schema['0.01']['alter']['table'] = [
    [
        'blocks' => 'ADD FOREIGN KEY (venue_id) REFERENCES venues(id)',
        'blocks' => 'ADD FOREIGN KEY (plugin_id) REFERENCES plugins(id)',
        'links' => 'ADD FOREIGN KEY (link_parent) REFERENCES links(id)',
        'plugins' => 'ADD FOREIGN KEY (version, folder_name) REFERENCES schemas(id, system_name)',
        'role_perm' => 'ADD FOREIGN KEY (role_id) REFERENCES roles(id)',
        'role_perm' => 'ADD FOREIGN KEY (perm_id) REFERENCES permissions(id)',
        'themes' => 'ADD FOREIGN KEY (version, folder_name) REFERENCES schemas(id, system_name)',
        'user_role' => 'ADD FOREIGN KEY (user_id) REFERENCES users(id)',
        'user_role' => 'ADD FOREIGN KEY (role_id) REFERENCES roles(id)',
        'venues' => 'ADD FOREIGN KEY (venue_admin) REFERENCES users(id)',
        'venues' => 'ADD FOREIGN KEY (active_theme) REFERENCES themes(id)',
        'venues' => 'ADD FOREIGN KEY (default_plugin) REFERENCES plugins(id)',
        'venues' => 'ADD FOREIGN KEY (language) REFERENCES languages(id)',
    ]
];
//*/

//*
$schema['0.01']['insert']['table'] = [
    [
        'blocks' => [
            [
                'name' => 'login_block',
                'venue_id' => '1',
                'plugin_id' => '2',
                'description' => 'This block will help speed up the log-in and registration process for users.',
                'block_area' => '1',
                'block_order' => '1',
                'active' => '2',
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp
            ],
            [
                'name' => 'welcome_block',
                'venue_id' => '1',
                'plugin_id' => '1',
                'description' => 'This is a block that welcomes new AllianceCMS users.',
                'block_area' => '1',
                'block_order' => '2',
                'active' => '2',
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp
            ],
            [
                'name' => 'contact_us',
                'venue_id' => '1',
                'plugin_id' => '1',
                'description' => 'AllianceCMS contact information.',
                'block_area' => '1',
                'block_order' => '3',
                'active' => '2',
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
        ],
        'languages' => [
            [
                'id' => '',
                'name' => 'English',
                'folder_name' => 'english',
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
        ],
        'links' => [
            [
                'id' => '',
                'label' => 'Home',
                'url' => '',
                'comment' => '',
                'link_parent' => '',
                'link_area' => 1,
                'link_order' => 1,
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
            [
                'id' => '',
                'label' => 'Ciao Folks',
                'url' => '/hello/hey',
                'comment' => '',
                'link_parent' => '',
                'link_area' => 1,
                'link_order' => 2,
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
            [
                'id' => '',
                'label' => 'Ciao People',
                'url' => '/hello/later',
                'comment' => '',
                'link_parent' => '',
                'link_area' => 1,
                'link_order' => 3,
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
            [
                'id' => '',
                'label' => 'Ciao Admin',
                'url' => '/admin/hello',
                'comment' => '',
                'link_parent' => '',
                'link_area' => 1,
                'link_order' => 4,
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
            [
                'id' => '',
                'label' => 'AllianceCMS: Wiki',
                'url' => 'https://github.com/jbWebWare/AllianceCMS/wiki',
                'comment' => '',
                'link_parent' => '',
                'link_area' => 1,
                'link_order' => 5,
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
            [
                'id' => '',
                'label' => 'AllianceCMS: API',
                'url' => 'http://api.alliancecms.com/',
                'comment' => '',
                'link_parent' => '',
                'link_area' => 1,
                'link_order' => 6,
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
        ],
        'plugins' => [
            [
                'id' => '',
                'name' => 'Home',
                'version' => '',
                'folder_path' => 'axis/plugins/',
                'folder_name' => 'Home',
                'description' => 'This Official AllianceCMS Plugin allows you to manage your home page.',
                'developer' => 'Jesse Burns',
                'developer_email' => 'jesse.burns@alliancecms.com',
                'developer_site' => 'http://www.alliancecms.com',
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
            [
                'id' => '',
                'name' => 'User Manager',
                'version' => '',
                'folder_path' => 'axis/plugins/',
                'folder_name' => 'UserManager',
                'description' => 'This Official AllianceCMS Plugin enables user management functionality.',
                'developer' => 'Jesse Burns',
                'developer_email' => 'jesse.burns@alliancecms.com',
                'developer_site' => 'http://www.alliancecms.com',
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
            [
                'id' => '',
                'name' => 'Ciao',
                'version' => '',
                'folder_path' => 'axis/plugins/',
                'folder_name' => 'Ciao',
                'description' => 'This is a simple take on the classic "Hello World!" plugin, AllianceCMS style.',
                'developer' => 'Jesse Burns',
                'developer_email' => 'jesse.burns@alliancecms.com',
                'developer_site' => 'http://www.alliancecms.com',
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
        ],
        'themes' => [
            [
                'id' => '',
                'name' => 'Emplode',
                'version' => '',
                'folder_path' => 'themes/',
                'folder_name' => 'Emplode',
                'description' => 'This theme is an AllianceCMS port of the Emplode website template found @ http://templates.arcsin.se.',
                'artist' => 'Jesse Burns',
                'artist_email' => 'jesse.burns@alliancecms.com',
                'artist_site' => 'http://www.alliancecms.com',
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
        ],
        'users' => [
            [
                'id' => '',
                'login_name' => $adminInsertLoginName,
                'display_name' => $adminInsertDisplayName,
                'password' => $adminInsertPassword,
                'email_address' => $adminInsertEmail,
                'hide_email_address' => $adminInsertHideEmail,
                'timezone_offset' => '',
                'last_login_time' => $currentMySqlTimestamp,
                'last_ip' => "'".getenv('REMOTE_ADDR')."'",
                'registration_ip' => "'".getenv('REMOTE_ADDR')."'",
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
        ],
        'venues' => [
            [
                'id' => '',
                'name' => $venueInsertName,
                'title' => $venueInsertTitle,
                'tagline' => $venueInsertTagline,
                'description' => $venueInsertDescription,
                'keywords' => $venueInsertKeywords,
                'venue_admin' => 1,
                'venue_email' => $venueInsertEmail,
                'venue_email_name' => $venueInsertEmailName,
                'default_plugin' => 1,
                'active_theme' => 1,
                'maintenance_flag' => 1,
                'maintenance_flag_text' => '',
                'language' => $languageInsert,
                'active' => 2,
                'created' => $currentMySqlTimestamp,
                'modified' => $currentMySqlTimestamp,
            ],
        ],
    ],
];
//*/
