<?php
/**
 * @package HelloFomoNewsletter
 */

namespace HFNewsletter\Pages;

use \HFNewsletter\Base\BaseController;
use \HFNewsletter\Api\SettingsApi;
use \HFNewsletter\Api\CallBacks\AdminCallBack;

class NewsLetter extends BaseController
{
    public $settings;

    public $pages = array();

    public $subpages = array();

    public $callbacks;

    public function register(){
        $this->settings = new SettingsApi();
        $this->callbacks = new AdminCallBack();
        $this->setPages();
        $this->setSubPages();
        $this->settings->addpages($this->pages)->addSubPages($this->subpages)->register();
    }

    public function setPages(){
        $this->pages = array(
            array(
                'page_title' =>'HelloFomo Newsletter Plugin',
                'menu_title'=>'NewsLetter',
                'capability'=>'manage_options',
                'menu_slug'=>'newsletter_plugin',
                'callback'=> array($this->callbacks, 'adminDashboard'),
                'icon_url'=>'dashicons-email-alt',
                'position'=>50
            )
        );
    }

    public function setSubPages(){
        $this->subpages = array(
            array(
                'parent_slug'=>'newsletter_plugin',
                'page_title' =>'New Newsletter',
                'menu_title'=>'New Shortcode',
                'capability'=>'manage_options',
                'menu_slug'=>'new_shortcode_plugin',
                'callback'=> array($this->callbacks, 'newShortcode'),
            )
        );
    }
}