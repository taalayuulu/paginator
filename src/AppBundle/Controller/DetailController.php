<?php
/**
 * Created by PhpStorm.
 * User: kanat
 * Date: 6/2/17
 * Time: 2:38 PM
 */

namespace src\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailController extends Controller
{
    public function indexAction() {
        $image = 'mers.JPG';
        return $this->render('detail/index.html.twig' , [
            'image' =>$image,
        ]);
    }

}