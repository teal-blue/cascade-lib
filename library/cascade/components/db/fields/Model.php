<?php
/**
 * ./app/components/objects/fields/Model.php
 *
 * @author Jacob Morrison <jacob@infinitecascade.com>
 * @package cascade
 */

namespace cascade\components\db\fields;

class Model extends Base {
	public $formFieldClass = 'cascade\\components\\web\\form\\fields\\Model';
	public function determineLocations()
	{
		if (isset($this->model)) {
			if (empty($this->value)) {
				return [self::LOCATION_HIDDEN];
			}
			$descriptorField = $this->model->descriptorField;
			$subdescriptorFields = $this->model->subdescriptorFields;
			if (!is_array($descriptorField)) {
				$descriptorField = [$descriptorField];
			}
			if (in_array($this->field, $descriptorField)) {
				return [self::LOCATION_HEADER];
			} elseif (in_array($this->field, $subdescriptorFields)) {
				return [self::LOCATION_SUBHEADER];
			}
		}
		return parent::determineLocations();
	}
}


?>
