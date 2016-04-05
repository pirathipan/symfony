<?php

namespace LeaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzonCloverAction($lien)
    {
        if ($lien == 'type1') {
            $src = "https://www.youtube.com/embed/bmTHw9vL3Vs";
        } else if ($lien == 'type3') {
            $src = "https://www.youtube.com/embed/foDTJceKio8";
        } else {
            $src = "https://www.youtube.com/embed/dFgb1vrF-F8";
        }
        return $this->render('LeaderBundle:crimzonClover.html.twig',
            array(
                'src' => $src)
        );
    }

    public function ikarugaAction($color)
    {
        if ($color == 'black') {
            $textColor = 'white';
        } else {
            $color = "white";
            $textColor = 'black';
        }
        return $this->render(
            'LeaderBundle:ikaruga.html.twig',
            array('backgroundColor' => $color,
                'textColor' => $textColor)
        );
    }
}