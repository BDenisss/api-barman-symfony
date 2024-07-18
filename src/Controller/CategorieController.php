<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/api/categorie", methods={"GET"})
     */
    public function list(): JsonResponse
    {
        // Exemple de données de catégories. Remplacez cela par une récupération de données depuis la base de données.
        $categories = [
            ['id' => 1, 'name' => 'Categorie 1'],
            ['id' => 2, 'name' => 'Categorie 2']
        ];

        return new JsonResponse($categories);
    }
}
