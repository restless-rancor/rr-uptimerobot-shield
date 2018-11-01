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
* Uptime Robot Shield ACP module.
*/
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user, $phpbb_log;

		// ext language
		$user->add_lang_ext('restlessrancor/uptimerobotshield', 'common');
		
		// acp/style
		$this->tpl_name = 'acp_utrobot_body';
		
		// Page Title
		$this->page_title = $user->lang('UTROBOT_TITLE');
		
		// define form
		$form_name = 'utrobots_enable';
		add_form_key($form_name);
		
		$this->config = $config;
		$this->request = $request;
		$this->template = $template;

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_name))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}
			
			$this->config->set('utrobot_api', trim($this->request->variable('utrobot_api', $this->config['utrobot_api'])));
			$this->config->set('utrobot_week', $this->request->variable('utrobot_week', 0));
			$this->config->set('utrobot_month', $this->request->variable('utrobot_month', 0));
			
			// Add to admin log
			$phpbb_log->add('admin', $user->data['user_id'], $user->ip, 'UTROBOT_UPDATED');
			trigger_error($user->lang('UTROBOT_SAVED') . adm_back_link($this->u_action));
		}
		
		// Assign to adm/style template
		$this->template->assign_vars(array(
			'UTROBOT_API'		=> $this->config['utrobot_api'],
			'UTROBOT_WEEK'		=> $this->config['utrobot_week'] ? true : false,
			'UTROBOT_MONTH'		=> $this->config['utrobot_month'] ? true : false,
			'U_ACTION'			=> $this->u_action,
		));
	}
}
