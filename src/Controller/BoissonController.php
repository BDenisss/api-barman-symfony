<?php

namespace App\Controller;

use App\Entity\Boisson;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BoissonController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // /**
    //  * @Route("/api/barman/boisson", methods={"POST"})
    //  */
    // public function create(Request $request): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);

    //     $boisson = new Boisson();
    //     $boisson->setNom($data['nom']);
    //     $boisson->setPrix($data['prix']);
    //     // Ajouter le media si nécessaire...

    //     $this->entityManager->persist($boisson);
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Boisson créée'], JsonResponse::HTTP_CREATED);
    // }

    // /**
    //  * @Route("/api/barman/boisson/{id}", methods={"PUT"})
    //  */
    // public function update(Request $request, Boisson $boisson): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);

    //     $boisson->setNom($data['nom']);
    //     $boisson->setPrix($data['prix']);
    //     // Mettre à jour le media si nécessaire...

    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Boisson mise à jour'], JsonResponse::HTTP_OK);
    // }

    // /**
    //  * @Route("/api/barman/boisson/{id}", methods={"DELETE"})
    //  */
    // public function delete(Boisson $boisson): JsonResponse
    // {
    //     $this->entityManager->remove($boisson);
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Boisson supprimée'], JsonResponse::HTTP_OK);
    // }

    // /**
    //  * @Route("/api/boissons", methods={"GET"})
    //  */
    // public function list(): JsonResponse
    // {
    //     $boissons = $this->getDoctrine()->getRepository(Boisson::class)->findAll();

    //     return $this->json($boissons);
    // }

    // /**
    //  * @Route("/api/boisson/{id}", methods={"GET"})
    //  */
    // public function detail(Boisson $boisson): JsonResponse
    // {
    //     return $this->json($boisson);
    // }
}

