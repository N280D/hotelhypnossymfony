<?php

namespace App\Controller;

use App\Entity\Etablissement;
use App\Entity\Suite;
use App\Repository\SuiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SuiteController extends AbstractController
{
    #[Route('/etablissement', name: 'app_etablissement')]
   

    public function index(SuiteRepository $repoSuite): Response
    {
        $suite=$repoSuite->findAll();
        //dd($suite);
    
        return $this->render('etablissement/index.html.twig', [
            'controller_name' => 'EtablissementController',
            'suite' =>$suite,
        ]);
    }

    #[Route('/etablissement/{id}', name:'etablissementurl')]
    public function show(Suite $suite) 
    {
      return $this->render('etablissement/index.html.twig',['suite' =>$suite]);
    }
}
