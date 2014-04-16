<?php
/**
 * @link http://www.infinitecascade.com/
 * @copyright Copyright (c) 2014 Infinite Cascade
 * @license http://www.infinitecascade.com/license/
 */

namespace cascade\components\db\fields\formats;

abstract class Base extends \infinite\base\Object
{
    public $field;
    abstract public function get();
    public function getFormValue()
    {
        return $this->field->value;
    }
}
