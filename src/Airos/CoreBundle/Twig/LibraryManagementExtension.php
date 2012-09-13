<?php
namespace Airos\CoreBundle\Twig;

use Twig_Extension;
use Twig_Filter_Method;

class AirosLibraryManagementExtension extends Twig_Extension
{
    public function getName()
    {
        return 'airos_libmgmnt';
    }
}