<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OneController extends AbstractController
{
    #[Route('/one/{id}', name: 'app_one', requirements: ['id' => '\d+'], defaults: ['id' => 5000])]
    public function index(Request $request, int $id): Response
    {
        $date = $request->query->get('date');
        $randomInt = random_int(1, 100);

        return $this->render('one/index.html.twig', [
            'id' => $date,
        ]);
    }

    #[Route('/one/cedc', name: 'app_one_cedc', methods: ['POST'])]
    public function cedc(): Response
    {
        $randomInt = random_int(1, 100);

        return $this->render('one/index.html.twig', [
            'id' => $randomInt,
        ]);
    }
}
