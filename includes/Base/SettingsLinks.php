<?php
/**
 *  @package HelloFomoNewsletter
 */

namespace HFNewsletter\Base;
use \HFNewsletter\Base\BaseController;

class SettingsLinks extends BaseController
{
    public function register(){
        add_filter('plugin_action_links_'.PLUGIN, array($this, 'settings_link'));
    }
    public function settings_link($links){
        $settings_link = '<a href="admin.php?page=newsletter_plugin">Dashboard</a>';
        array_push($links, $settings_link);
        return $links;
    }
}