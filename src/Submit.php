<?php
/**
 * @package gossi\webform
 */
namespace gossi\webform;

class Submit extends Control {

	public function toXml() {
		return $this->createXml('Submit');
	}
}
?>