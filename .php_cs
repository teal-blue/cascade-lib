<?php
$path = __DIR__;
$docBlockSettings = [];
$docBlockSettings['package'] = 'cascade';
return include(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'yii2-teal-core' . DIRECTORY_SEPARATOR . '.php_cs');
?>