<?php

namespace Airos\CoreBundle\LibManager;

use Airos\CoreBundle\Common\AirosBagInterface as BagInterface;
use Airos\CoreBundle\LibManager;

/**
 * @Service("airos.libmanager.extbag")
 */
class AirosLibManagerExtBag implements BagInterface
{
    private $bag;

    public function __construct()
    {
        $this->bag = array();
    }

    public function add(AirosLibManagerExtInterface $ext)
    {
        $this->bag[] = $ext;
    }

    public function remove(AirosLibManagerExtInterface $ext)
    {
        //TODO: search by alias
        if (in_array($ext, $this->bag)) {
            unset($this->bag[$ext]);
        }
    }

    public function get(AirosLibManagerExtInterface $ext)
    {
        if ($this->bag[$ext]) {
            return $this->bag[$ext];
        } else {
            return FALSE;
        }   
    }

    public function all()
    {
        return $this->bag;
    }
}
