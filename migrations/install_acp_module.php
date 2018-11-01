<?php
/**
*
* UptimeRobot Shield. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace restlessrancor\uptimerobotshield\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['restlessrancor_uptimerobotshield']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('restlessrancor_uptimerobotshield', 0)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'UTROBOT_TITLE'
			)),
			array('module.add', array(
				'acp',
				'UTROBOT_TITLE',
				array(
					'module_basename'	=> '\restlessrancor\uptimerobotshield\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
