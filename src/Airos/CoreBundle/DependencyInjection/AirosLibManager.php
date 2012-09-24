<?php
namespace Airos\CoreBundle\DependencyInjection;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Service("airos_core.libmanager", parent="another.service.id", public=false)
 */
class AirosLibManager
{

    private $default_extjs_lib = '4.1.1';
	
	public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
    	// only check if master request, this allows JSON response still
    	if (HttpKernel::MASTER_REQUEST != $event->getRequestType()) {
            // don't do anything if it's not the master request
            return;
        }
				
		if (rtrim($event->getRequest()->getPathInfo(), "/") != '/_setup')
		{
		    $event->setResponse(new RedirectResponse($this->router->generate('airos_core_setup'), 301));
		}
    }
}