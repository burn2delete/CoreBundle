<?php

namespace Airos\CoreBundle\Common;

interface AirosBagInterface
{

    public function add();

    public function remove();

    public function get();

    public function all();

    public function isEmpty();
}
