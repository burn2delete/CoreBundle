<?php

namespace Airos\CoreBundle\LibManager;

/**
 * AirosAbstractExt
 */
class AirosAbstractExt implements AirosLibManagerExtInterface
{

    public function getName()
    {
        return $this->name;

    }

    public function getVersion()
    {
        return $this->version;

    }

    public function getLicense()
    {
        return $this->license;

    }

    public function getUrl()
    {
        return $this->url;

    }

    public function getParentLib()
    {
        return $this->parentLib;

    }

    public function getFqcn()
    {
        return $this->fqcn;

    }

    public function getPath()
    {
        return $this->path;

    }

    public function getDescription()
    {
        return $this->description;

    }

    public function getType()
    {
        return $this->type;

    }

    public function getAlias()
    {
        return $this->alias;

    }

} // END
