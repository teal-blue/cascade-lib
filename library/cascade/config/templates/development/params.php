<?php
/**
 * ./app/config/environments/templates/development/params.php.
 *
 * @author Jacob Morrison <jacob@tealcascade.com>
 */
if (!defined('YII_ENV')) {
    define('YII_ENV', 'dev');
}

$parent = TEAL_APP_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'common' . DIRECTORY_SEPARATOR . basename(__FILE__);

return array_merge(include($parent), [
    'salt' => '%%_.salt%%',
    'primaryAccount' => '##primaryAccount##', // $PRIMARY_ACCOUNT$ : COULD BREAK THINGS IF CHANGED
]);
