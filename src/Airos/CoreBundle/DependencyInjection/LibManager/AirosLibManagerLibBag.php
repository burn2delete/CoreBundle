<?php

namespace Airos\CoreBundle\LibManager;

use Airos\CoreBundle\Common\AirosBagInterface as BagInterface;
use Airos\CoreBundle\LibManager;

/**
 * @Service("airos.libmanager.libbag")
 */
class AirosLibManagerLibBag implements BagInterface
{
    private $bag;

    public function __construct()
    {
        $this->bag = array();
    }

    public function add(AirosLibManagerLibInterface $lib)
    {
        $this->bag[] = $lib;
    }

    public function remove(AirosLibManagerLibInterface $lib)
    {
        //TODO: search by alias
        if (in_array($lib, $this->bag)) {
            unset($this->bag[$lib]);
        }
    }

    public function get(AirosLibManagerLibInterface $lib)
    {
        if ($this->bag[$lib]) {
            return $this->bag[$lib];
        } else {
            return FALSE;
        }   
    }

    public function all()
    {
        return $this->bag;
    }
}
