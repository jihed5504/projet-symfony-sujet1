<?php

namespace App\Controller;
use App\Repository\categoryRepository;
use App\Repository\RubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(RubriqueRepository $rubriqueRepository,EntityManagerInterface $entityManager): Response
    {
        $rubrique=$rubriqueRepository->findAll();
        return $this->render('home/index.html.twig', [
            'rubrique' => $rubrique,
            'controller_name' => 'HomeController',
        ]);
    }
    
}
