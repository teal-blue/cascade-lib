<?php
/**
 * @link http://www.tealcascade.com/
 *
 * @copyright Copyright (c) 2014 Teal Software
 * @license http://www.tealcascade.com/license/
 */

namespace cascade\components\web\bootstrap;

use Yii;

/**
 * Nav [[@doctodo class_description:cascade\components\web\bootstrap\Nav]].
 *
 * @author Jacob Morrison <email@ofjacob.com>
 */
class Nav extends \yii\bootstrap\Nav
{
    /**
     * @inheritdoc
     */
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
