<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction() {

        $abstract  = [
            'Benz.JPG',
            'mers.JPG'
        ];

        $summer = ['mers2.jpg',
                    'mers.JPG'];

        $winter = ['mers3.jpg',
                    'mers.JPG'];

        $images = array_merge($abstract, $summer, $winter);
        shuffle($images);

        $randomizedImages  = array_slice($images, 0, 8);
        return $this->render('home/index.html.twig', [
            'randomizedImages'=>$randomizedImages,
            'abstract'        => array_slice($abstract, 0 , 6),
            'summer'        => array_slice($summer, 0 , 6),
            'winter'        => array_slice($winter, 0 , 6),
        ]);
    }
}