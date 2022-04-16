<?php

namespace App\Controller;

use App\Repository\EtablissementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EtablissementRepository $repoEtablissement): Response
    {
        $etablissement=$repoEtablissement->findAll();
        //dd($etablissement);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'etablissement'=>$etablissement,
        ]);
    }
}
