<?php
/**
 * @package HelloFomoNewsletter
 */

namespace HFNewsletter\Base;

use \HFNewsletter\Base\BaseController;

class Enqueue extends BaseController
{
    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    public function enqueue(){
        wp_enqueue_style('mypluginstyle', $this->plugin_url. 'assets/hfstyle.css');
        wp_enqueue_script('mypluginscript', $this->plugin_url. 'assets/hfscript.js');
    }
}