<?php

namespace LeaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PinkController extends Controller
{
    public function deathsmilesAction()
    {
        return $this->render('LeaderBundle:deathsmiles.html.twig');
    }

    public function mushihimesamaAction()
    {
        return $this->render('LeaderBundle:mushihimesama.html.twig');
    }
}