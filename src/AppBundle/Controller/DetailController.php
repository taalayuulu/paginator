<?php
/**
 * Created by PhpStorm.
 * User: kanat
 * Date: 6/2/17
 * Time: 2:38 PM
 */

namespace src\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailController extends Controller
{

    /**
     * @Route("/view" ,name="view")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function indexAction() {
        $image = 'mers.JPG';
        return $this->render('detail/index.html.twig' , [
            'image' =>$image,
        ]);
    }

}