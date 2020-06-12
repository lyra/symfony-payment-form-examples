<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('payzen');
        //$rootNode = $treeBuilder->root();


        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('site_id')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('key_test')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('key_prod')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('ctx_mode')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('sign_algo')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('platform_url')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
