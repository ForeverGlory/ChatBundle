<?php

namespace Glory\Bundle\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GloryChatBundle:Default:index.html.twig', array('name' => $name));
    }
}
