<?php


namespace Airos\CoreBundle\Automagic\Loader;


interface AutomagicLoaderInterface
{
	
	public $environment;
	public $kernelDir;
	public $vendorDir;
	public $srcDir;
	public $filesystem;
	
	public function search();

}