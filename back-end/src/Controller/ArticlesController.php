<?php

namespace App\Controller;

Use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
Use App\Entity\Articles;

class ArticlesController extends AbstractController
{
    
    public function index() 
    {
       
        $articles  = $this->getDoctrine()->getManager();
        $em        = $articles->getRepository(Articles::class)->findAll();
        
        return $this->json(
            $em
        );
    }
    public function show($id)
    {
        $articles   = $this-> getDoctrine()->getManager();
        $em         = $articles->getRepository(Articles::class)->find($id);

        return $this->json(
            $em
        );
    }
}
