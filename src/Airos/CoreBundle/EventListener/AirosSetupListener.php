<?php
namespace Airos\CoreBundle\EventListener;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class AirosSetupListener
{
	/**
     * @var Router $router
     */
    private $router;
	
	private $request;

	public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
    	print($event->getRequest()->get('_route'));
    	// only check if master request, this allows JSON response still
    	if (HttpKernel::MASTER_REQUEST != $event->getRequestType()) {
            // don't do anything if it's not the master request
            return;
        }
				
		if ($event->getRequest()->get('_route') != 'airos_core_setup')
		{
		    $event->setResponse(new RedirectResponse($this->router->generate('_setup'), 301));
		}
    }
}