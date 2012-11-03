<?php

namespace Airos\CoreBundle\Common;

interface AirosChainInterface
{

    public function add();

    public function remove();

    public function get();

    public function all();

    public function resolve();

}
