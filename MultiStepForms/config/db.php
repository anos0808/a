<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=MyDb',
    'username' => 'root',
    'password' => '',
    'emulatePrepare' => true,
    'charset' => 'utf8', 'tablePrefix' => '',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
