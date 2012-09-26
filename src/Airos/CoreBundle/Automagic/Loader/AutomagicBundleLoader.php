<?php


namespace Airos\CoreBundle\Automagic\Loader;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder;

class AutomagicBundleLoader
{
		
	/**
     * Constructor
     *
     * @param string $kernelDir     The kernel directory path
     * @param string $environment   The current environment
     */
    public function __construct($kernelDir, $environment)
    {
        $this->environment = $environment;
        $this->kernelDir = $kernelDir;
        $this->vendorDir = $this->kernelDir . '/../vendor';
        $this->srcDir = $this->kernelDir . '/../src';
        $this->filesystem = new Filesystem();
    }
	
	public function search()
	{
		$finder = new Finder();
		$systemAutoload = $finder->files()->name('autoload.json')->in($this->kernelDir . '/config');
		
		foreach ($systemAutoload as $systemAutoloadFile) {
			
			print_r($systemAutoloadFile);
			
		}
		
	}

}