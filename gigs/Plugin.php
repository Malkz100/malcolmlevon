<?php namespace MalcolmLevon\Gigs;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
			'name'        => 'Gigs',
			'description' => 'Organise and list gigs with artists and venues.',
			'author'      => 'Malcolm Levon',
			'icon'        => 'icon-music'
		];
	}

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
