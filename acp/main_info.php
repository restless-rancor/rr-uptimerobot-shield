<?php
/**
*
* UptimeRobot Shield. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace restlessrancor\uptimerobotshield\acp;

/**
* Uptime Robot Shield ACP module info.
*/
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\restlessrancor\uptimerobotshield\acp\main_module',
			'title'		=> 'UTROBOT_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'UTROBOT_SETTINGS',
					'auth'	=> 'ext_restlessrancor/uptimerobotshield && acl_a_board',
					'cat'	=> array('UTROBOT_TITLE')
				),
			),
		);
	}
}
