<?php
/**
*
* UptimeRobot Shield. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace restlessrancor\uptimerobotshield\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* UptimeRobot Shield Event listener.
*/
class main_listener implements EventSubscriberInterface
{
	protected $user;
    protected $template;
	protected $language;
	protected $config;
	
    public function __construct(
		\phpbb\user $user, 
		\phpbb\template\twig\twig $template, 
		\phpbb\language\language $language,
		\phpbb\config\config $config)
    {
        $this->user = $user;
        $this->template = $template;
		$this->language = $language;
		$this->config = $config;
    }

    static public function getSubscribedEvents()
    {
        return array(
            'core.page_header_after' => 'utrobot_header',
        );
    }
	
	public function utrobot_header($event)
    {	
		$this->language->add_lang('common', 'restlessrancor/uptimerobotshield');
		// Assign to topic template
		$this->template->assign_vars(array(
			'UTROBOT_API'		=> $this->config['utrobot_api'],
			'UTROBOT_WEEK'		=> $this->config['utrobot_week'] ? true : false,
			'UTROBOT_MONTH'		=> $this->config['utrobot_month'] ? true : false,
		));
    }
}
