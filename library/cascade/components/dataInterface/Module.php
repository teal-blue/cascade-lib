<?php
/**
 * @link http://www.infinitecascade.com/
 * @copyright Copyright (c) 2014 Infinite Cascade
 * @license http://www.infinitecascade.com/license/
 */

namespace cascade\components\dataInterface;

use infinite\action\Action as BaseAction;
/**
 * Module [@doctodo write class description for Module]
 *
 * @author Jacob Morrison <email@ofjacob.com>
 */
abstract class Module extends \cascade\components\base\CollectorModule
{
    /**
     * @var __var_name_type__ __var_name_description__
     */
    public $name;
    /**
     * @var __var_version_type__ __var_version_description__
     */
    public $version = 1;

    /**
    * @inheritdoc
     */
    public function getCollectorName()
    {
        return 'dataInterfaces';
    }

    /**
    * @inheritdoc
     */
    public function getModuleType()
    {
        return 'Interface';
    }

    /**
     * __method_run_description__
     * @param cascade\components\dataInterface\Action $action __param_action_description__
     */
    abstract public function run(BaseAction $action);
}
