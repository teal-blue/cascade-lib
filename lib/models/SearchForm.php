<?php
/**
 * @link http://www.tealcascade.com/
 *
 * @copyright Copyright (c) 2014 Teal Software
 * @license http://www.tealcascade.com/license/
 */

namespace cascade\models;

use yii\base\Model;

/**
 * SearchForm is the model behind the search form.
 *
 * @author Jacob Morrison <email@ofjacob.com>
 */
class SearchForm extends Model
{
    /**
     * @var [[@doctodo var_type:query]] [[@doctodo var_description:query]]
     */
    public $query;

    /**
     * [[@doctodo method_description:rules]].
     *
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // query
            [['query'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'query' => 'Search Query',
        ];
    }
}