<?php

namespace Airos\CoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class LibManagerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (false === $container->hasDefinition('airos.libmanager.chain')) {
            return;
        }

        $definition = $container->getDefinition('airos.libmanager.chain');

        foreach ($container->findTaggedServiceIds('airos.libmanager.manager') as $id => $attributes) {
            $definition->addMethodCall('add', array(new Reference($id)));
        }
    }
}
