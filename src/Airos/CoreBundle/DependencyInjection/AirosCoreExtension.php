<?php

namespace Airos\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Routing\Router;
use Airos\CoreBundle\DependencyInjection\Configuration;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class AirosCoreExtension extends Extension
{

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

		if (!isset($config['setup'])) {
        	throw new \InvalidArgumentException('The "setup" option must be set to either true or false');
    	} elseif ($config['setup'] == 'true') {
	        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
    	    $loader->load('setup_service.yml');	
    	} elseif ($config['setup'] == 'false') {
    		return;
    	}

	}
	
}