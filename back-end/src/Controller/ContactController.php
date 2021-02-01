<?php

namespace App\Controller;

Use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
Use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
Use Symfony\Component\HttpFoundation\JsonResponse;

class ContactController extends AbstractController
{
    public function register(Request $request) 
    {
       
        $data = $request->request->all();
        var_dump($data);
        $contact = new Contact;
        $contact->SetName($data['name']);
        $contact->SetEmail($data['email']);
        $contact->Setphone($data['phone']);
        $contact->SetText($data['text']);
        $doctrine  = $this->getDoctrine()->getManager();
        $doctrine->persist($contact);
        $doctrine->flush();
        return $this->json(
           $data
        );
    }
    public function show() 
    {
       
        $articles  = $this->getDoctrine()->getManager();
        $em        = $articles->getRepository(Contact::class)->findAll();
        
        return $this->json(
            $em
        );
    }
   
}
