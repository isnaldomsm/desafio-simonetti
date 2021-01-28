<?php

namespace App\Controller;

Use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


Use App\Entity\Articles;

class ArticlesController extends AbstractController
{
    
    public function index() 
    {
       
        $articles = $this->getDoctrine()->getManager();
        $em       =  $articles->getRepository(Articles::class)->getAll();
       
      
        return $this->json(
              $em
        );
    }
}
