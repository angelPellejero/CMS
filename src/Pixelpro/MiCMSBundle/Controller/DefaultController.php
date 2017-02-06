<?php

namespace Pixelpro\MiCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PixelproMiCMSBundle:Default:index.html.twig');
    }
}
