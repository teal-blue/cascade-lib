<?php
/**
 * @link http://www.tealcascade.com/
 *
 * @copyright Copyright (c) 2014 Teal Software
 * @license http://www.tealcascade.com/license/
 */

namespace cascade\components\web\assetBundles;

use yii\web\AssetBundle;

/**
 * QueryBuilderAsset [[@doctodo class_description:cascade\components\web\assetBundles\QueryBuilderAsset]].
 *
 * @author Jacob Morrison <email@ofjacob.com>
 */
class QueryBuilderAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/mistic100/jquery-querybuilder/src';
    /**
     * @inheritdoc
     */
    public $css = [
        'query-builder.css',
    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'query-builder.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = ['yii\web\JqueryAsset'];
}