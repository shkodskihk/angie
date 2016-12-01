<?php
/**
 * @package angi4j
 * @copyright Copyright (C) 2009-2016 Nicholas K. Dionysopoulos. All rights reserved.
 * @author Nicholas K. Dionysopoulos - http://www.dionysopoulos.me
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL v3 or later
 */

defined('_AKEEBA') or die();

class AngieViewFinalise extends AView
{
	public $showconfig;
	public $configuration;

	public function onBeforeMain()
	{
		$model = $this->getModel();

		$this->showconfig = $model->getState('showconfig', 0);

		if ($this->showconfig)
		{
			/** @var AngieModelOctobercmsConfiguration $configModel */
			$configModel = AModel::getAnInstance('Configuration', 'AngieModel', array(), $this->container);

			$this->configuration = $configModel->getFileContents();
		}

		return true;
	}
}