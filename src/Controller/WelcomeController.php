<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController  extends AbstractController
{
    /**
     * @Route("/", name="app_welcome")
     */
    public function index(){
        return $this->render('welcome.html.twig');
    }
}