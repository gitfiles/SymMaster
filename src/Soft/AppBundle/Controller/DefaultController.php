<?php

namespace Soft\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SoftAppBundle:Default:index.html.twig', array('name' => $name));
    }
}
