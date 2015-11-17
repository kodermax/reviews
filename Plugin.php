<?php namespace Kodermax\Reviews;

use System\Classes\PluginBase;
use Backend;

/**
 * Reviews Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'kodermax.reviews::lang.plugin.name',
            'description' => 'kodermax.reviews::lang.plugin.description',
            'author'      => 'Maksim Karpychev',
            'icon'        => 'icon-list'
        ];
    }
    public function registerComponents()
    {
        return [
            'Kodermax\Reviews\Components\Reviews' => 'reviews',
            'Kodermax\Reviews\Components\Review' => 'review',
        ];
    }
    public function registerNavigation()
    {
        return [
            'reviews' => [
                'label' => 'kodermax.reviews::lang.menu.name',
                'url'   => Backend::url('kodermax/reviews/reviews'),
                'icon'        => 'icon-list',
                'permissions' => ['kodermax.*'],
                'order'       => 500,
            ],
        ];
    }
}
