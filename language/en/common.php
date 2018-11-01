<?php
/**
*
* UptimeRobot Shield. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UTROBOT_TITLE'			=> 'Uptime Robot Shield',
	'UTROBOT_SETTINGS'		=> 'Settings',
	'UTROBOT_UPDATED'		=> 'Uptime Robot Shields Settings Updated',
	'UTROBOT_SAVED'			=> 'Settings Saved!',
	'UTROBOT_API'			=> 'Monitor-Specific API Key',
	'UTROBOT_API_EXPLAIN'	=> 'An account at <a href="https://uptimerobot.com">https://uptimerobot.com</a> is required to make an API key.<br />After setting up your site monitor, go:<br /><em>My Settings > (Scroll down) > API Settings > <strong>Monitor-Specific API keys</strong></em> to create your API.',
	'UTROBOT_WEEK'			=> '7 Day Monitor',
	'UTROBOT_WEEK_EXPLAIN'	=> 'Display uptime shield covering the last 7 days.',
	'UTROBOT_WEEK_INFO'		=> 'Uptime over the past 7 days',
	'UTROBOT_MONTH'			=> '30 Day Monitor',
	'UTROBOT_MONTH_EXPLAIN'	=> 'Display uptime shield covering the last 30 days.',
	'UTROBOT_MONTH_INFO'	=> 'Uptime over the past 30 days',
));
