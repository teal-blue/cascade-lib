<?php
/**
 * @link http://www.tealcascade.com/
 *
 * @copyright Copyright (c) 2014 Teal Software
 * @license http://www.tealcascade.com/license/
 */

namespace cascade\components\web\widgets\section;

/**
 * ParentSection [[@doctodo class_description:cascade\components\web\widgets\section\ParentSection]].
 *
 * @author Jacob Morrison <email@ofjacob.com>
 */
class ParentSection extends Section
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->title = 'Related';
        $this->icon = false;
    }

    /**
     * @inheritdoc
     */
    public function widgetCellSettings()
    {
        return [
            'mediumDesktopColumns' => 6,
            'tabletColumns' => 6,
            'baseSize' => 'tablet',
        ];
    }

    /**
     * [[@doctodo method_description:isSingle]].
     *
     * @return [[@doctodo return_type:isSingle]] [[@doctodo return_description:isSingle]]
     */
    public function isSingle()
    {
        return false;
    }
}