<?php
/**
 * @package HelloFomoNewsletter
 */

namespace HFNewsletter;

// final class - cannot be extended further more and can only be used 
final class Init
{
    /**
     * Store all the classes inside an array
     * @return array full list of classes 
     */
    public static function get_services()
    {
        return [
            pages\NewsLetter::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
        ];
    }

    /**
     * Loop through the classes, initialize them 
     * and call the register method if it exists
     * @return 
     */
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    /**
     * Init
     * @param class $class from services array
     * @return class inctance new instance of the class
     */
    private static function instantiate($class)
    {
        $service = new $class();
        return $service;
    }
}
