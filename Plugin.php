<?php namespace Em\Callback;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Em\Callback\Components\ContactForm' => 'contactForm'
        ];
    }

    public function registerSettings()
    {
    }
}
