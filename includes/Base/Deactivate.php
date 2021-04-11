<?php
/**
 *  @package HelloFomoNewsletter
 */

namespace HFNewsletter\Base;

class Deactivate
{
    public static function deactivate(){
        flush_rewrite_rules();
    }
}