<?php
/**
 * @link http://www.infinitecascade.com/
 * @copyright Copyright (c) 2014 Infinite Cascade
 * @license http://www.infinitecascade.com/license/
 */

namespace cascade\components\web\bootstrap;

use Yii;
class Nav extends \yii\bootstrap\Nav
{
    public function renderItem($item)
    {
        if ($this->route === null && Yii::$app->response !== null) {
            $this->route = Yii::$app->response->getRoute();
        }
        if (isset($item['active'])) {
            if (is_callable($item['active'])) {
                $item['active'] = call_user_func($item['active'], $this, $item);
            }
        }

        return parent::renderItem($item);
    }
}
