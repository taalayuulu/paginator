<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $images = [
            'mers.JPG',
            'Benz.JPG',
            'mers3.jpg',
            'mers.JPG',
            'mers2.jpg',
            'mers3.jpg',
            'Benz.JPG',
            'mers3.jpg',
            'Benz.JPG',
            'mers3.jpg',
        ];
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $images ,
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );


        return $this->render('gallery/index.html.twig',[
            'images' => $pagination
            ]);
    }
}
