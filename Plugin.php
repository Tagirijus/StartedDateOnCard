<?php

namespace Kanboard\Plugin\TagiStartedDateOnCard;

use Kanboard\Core\Plugin\Base;
// use Kanboard\Plugin\PluginNameExampleStudlyCaps\AgeHelper;  // Helper Class and Filename should be exact
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:board:task:footer', 'TagiStartedDateOnCard:board/task_footer_started_date');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        // Do not translate the plugin name here
        return 'TagiStartedDateOnCard';
    }

    public function getPluginDescription()
    {
        return t('This plugin adds a visual hint on a card, if it has a started date.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.27';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/kanboard-TagiStartedDateOnCard';
    }
}
