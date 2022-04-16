<?php

namespace App\Controller;

use App\Form\ReservationType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Reservations extends AbstractController
{
    #[Route('/reservations', name: 'reservations')]
    public function index(): Response
   
    {
        $form= $this->createForm(ReservationType::class);

        return $this->render('reservations/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
