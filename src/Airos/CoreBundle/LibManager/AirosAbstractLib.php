<?php

namespace Airos\CoreBundle\LibManager;

/**
 * AirosAbstractLib
 */
class AirosAbstractLib implements AirosLibManagerLibInterface
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

    public function getExtDir()
    {
        return $this->extDir;

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
