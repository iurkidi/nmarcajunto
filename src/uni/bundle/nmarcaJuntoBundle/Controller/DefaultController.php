<?php

namespace uni\bundle\nmarcaJuntoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('uniNmarcaJuntoBundle:Default:index.html.twig', array('name' => 'itziar'));
    }
}
