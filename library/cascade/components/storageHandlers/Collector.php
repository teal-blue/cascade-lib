<?php
/**
 * @link http://www.infinitecascade.com/
 * @copyright Copyright (c) 2014 Infinite Cascade
 * @license http://www.infinitecascade.com/license/
 */

namespace cascade\components\storageHandlers;

class Collector extends \infinite\base\collector\Module
{
    protected $_initialItems = [];

    public function getCollectorItemClass()
    {
        return 'cascade\\components\\storageHandlers\\Item';
    }

    public function getModulePrefix()
    {
        return 'Storage';
    }

    public function getInitialItems()
    {
        return $this->_initialItems;
    }

    public function setInitialItems($value)
    {
        $this->_initialItems = $value;
    }
}
