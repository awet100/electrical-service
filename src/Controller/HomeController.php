<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }

    #[Route('/residential-wiring', name: 'residential')]
    public function residential(): Response
    {
        return $this->render('home/residential.html.twig');
    }


    #[Route('/compliance', name: 'compliance')]
    public function compliance(): Response
    {
        return $this->render('home/compliance.html.twig');
    }

    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        return $this->render('home/registration.html.twig');
    }

    #[Route('/electricity', name: 'electricity')]
    public function electricity(): Response
    {
        return $this->render('home/electrical.html.twig');
    }

    #[Route('/review', name: 'review')]
    public function review(): Response
    {
        return $this->render('home/review.html.twig', [
            'reviews' => ['this is first review', 'this is second review' , 'this is third review']
        ]);
    }
}