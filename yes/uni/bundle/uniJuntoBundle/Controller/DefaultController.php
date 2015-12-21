<?php

namespace uni\bundle\uniJuntoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uniJuntoBundle:Default:index.html.twig', array('name' => $name));
    }
}
