<?php
/**
 * @package HelloFomoNewsletter
 */

namespace HFNewsletter\Api\CallBacks;
use \HFNewsletter\Base\BaseController;

class AdminCallBack extends BaseController
{
    public function adminDashboard(){
        require_once("$this->plugin_path/templates/admin.php");
    }

    public function newShortcode(){
        require_once("$this->plugin_path/templates/newshortcode.php");
    }
}