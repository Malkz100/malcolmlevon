<?php
/**
 * Created by PhpStorm.
 * User: Malkz
 * Date: 02/07/2018
 * Time: 22:33
 */

namespace MalcolmLevon\Gigs\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use MalcolmLevon\Gigs\Models\Artist;

class ArtistBox extends FormWidgetBase
{
	public function widgetDetails()
	{
		return[
			'name' => 'Artistbox',
			'description' => 'Field for adding artists'
		];
	}

	public function render()
	{
		$this->prepareVars();
		//dump($this->vars['selectedValues']);
		//dump($this->vars['artists']);
		return $this->makePartial('widget');
	}

	public function prepareVars()
	{
		$this->vars['id'] = $this->model->id;
		$this->vars['artists'] = Artist::all()->lists('artist_name', 'id');
		$this->vars['name'] = $this->formField->getName().'[]';

		//Get selected values to display on form
		if(!empty($this->getLoadValue())){
			$this->vars['selectedValues'] = $this->getLoadValue();
		} else {
			$this->vars['selectedValues'] = [];
		}
	}

	public function loadAssets()
	{
		$this->addCss('css/select2.css');
		$this->addJs('js/select2.js');
	}
}