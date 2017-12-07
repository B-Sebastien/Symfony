<?php

namespace ESBGsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ESBGsbBundle:Default:index.html.twig');
    }
}
