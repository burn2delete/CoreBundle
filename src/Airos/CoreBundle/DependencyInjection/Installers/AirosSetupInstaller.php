<?php

namespace Airos\CoreBundle\DependencyInjection\Installers;

use Airos\CoreBundle\Common\AirosChainInterface;
use Airos\CoreBundle\Installers;

/**
 *
 */
class AirosSetupInstaller extends AirosChainInterface
{
    private $chain;

    public function __construct()
    {
        $this->chain = array();

    }

    public function add(AirosInstallerInterface $installer)
    {
        $this->chain[] = $installer;
        $this->chain[$installer]['priority'] = $installer->getPriority();
    }

    public function remove()
    {
        if (in_array($installer, $this->chain)) {
            unset($this->chain[$installer]);
        }
    }

    public function sortInstallers()
    {
        //TODO: sort installers via priority.
    }

    public function run()
    {
        //TODO: Installer code - Load Installer and begin.
    }

}
