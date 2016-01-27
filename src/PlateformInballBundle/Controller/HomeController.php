<?php

namespace PlateformInballBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
   
    public function indexAction()
    {
        return $this->render('PlateformInballBundle:Home:index.html.twig');
    }
}