<?php

namespace cascade\modules\ThemeCascade;

use Yii;

class Module extends \cascade\components\web\themes\Module
{
	public function getComponentNamespace()
	{
		return 'cascade\\modules\\ThemeCascade\\components';
	}

	public function getIdentityAssetBundle()
	{
		return $this->componentNamespace . '\\IdentityAsset';
	}
}