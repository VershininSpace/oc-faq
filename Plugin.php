<?php namespace VershininSpace\Faq;

use System\Classes\PluginBase;
use  VershininSpace\Faq\Components\Faq;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'vershininspace.faq::lang.plugin.name',
            'description' => 'vershininspace.faq::lang.plugin.description',
            'author'      => 'vershininspace.faq::lang.plugin.author'
        ];
    }

    public function registerComponents()
    {
        return [
            Faq::class   => 'Faq'
        ];
    }

    public function registerSettings()
    {
    }
}
