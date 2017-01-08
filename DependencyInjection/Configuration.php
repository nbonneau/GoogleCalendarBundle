<?php

namespace Nbonneau\GoogleCalendarBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Nbonneau\GoogleCalendarBundle\DependencyInjection\ConfigurationInterface as BundleConfigInterface;
use Google_Service_Calendar;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface, BundleConfigInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root(self::CONFIG_NODE_NAME);

        $rootNode->children()
                    ->scalarNode(self::CLIENT_SECRET_PATH_LABEL)->isRequired(true)->end()
                    ->scalarNode(self::APP_NAME_LABEL)->isRequired(true)->end()
                    ->scalarNode(self::CREDENTIALS_PATH_LABEL)->defaultValue('~/.credentials/google-calendar.json')->end()
                    ->scalarNode(self::SCOPE_LABEL)->defaultValue(Google_Service_Calendar::CALENDAR_READONLY)->end()
                ->end();

        return $treeBuilder;
    }
}
