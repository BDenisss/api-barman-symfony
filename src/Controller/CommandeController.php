<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Boisson;
use App\Repository\CommandeRepository;
use App\Repository\BoissonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CommandeController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    // /**
    //  * @Route("/api/serveur/commande", methods={"POST"})
    //  */
    // public function create(Request $request, BoissonRepository $boissonRepository): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);
        
    //     $commande = new Commande();
    //     $commande->setDateCreation(new \DateTime());
    //     $commande->setNumeroTable($data['numeroTable']);
    //     $commande->setStatus('en cours de préparation');
    //     $commande->setServeur($this->security->getUser());

    //     foreach ($data['boissons'] as $boissonId) {
    //         $boisson = $boissonRepository->find($boissonId);
    //         if ($boisson) {
    //             $commande->addBoisson($boisson);
    //         }
    //     }

    //     $this->entityManager->persist($commande);
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Commande créée'], JsonResponse::HTTP_CREATED);
    // }

    // /**
    //  * @Route("/api/client/commande/{id}/payer", methods={"POST"})
    //  */
    // public function payerCommande(Commande $commande): JsonResponse
    // {
    //     if ($commande->getStatus() === 'payée') {
    //         return new JsonResponse(['status' => 'Cette commande est déjà payée'], JsonResponse::HTTP_BAD_REQUEST);
    //     }

    //     $commande->setStatus('payée');
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Commande payée'], JsonResponse::HTTP_OK);
    // }

    // /**
    //  * @Route("/api/serveur/commande/{id}", methods={"GET"})
    //  */
    // public function getCommande(Commande $commande): JsonResponse
    // {
    //     $this->denyAccessUnlessGranted('ROLE_SERVEUR');

    //     return $this->json($commande);
    // }

    // /**
    //  * @Route("/api/barman/commandes", methods={"GET"})
    //  */
    // public function getCommandesEnCours(CommandeRepository $commandeRepository): JsonResponse
    // {
    //     $commandes = $commandeRepository->findBy(['status' => 'en cours de préparation']);

    //     return $this->json($commandes);
    // }

    // /**
    //  * @Route("/api/barman/commande/{id}/attribuer", methods={"PUT"})
    //  */
    // public function attribuerCommande(Commande $commande): JsonResponse
    // {
    //     $this->denyAccessUnlessGranted('ROLE_BARMAN');

    //     $commande->setBarman($this->security->getUser());
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Commande attribuée'], JsonResponse::HTTP_OK);
    // }

    // /**
    //  * @Route("/api/barman/commande/{id}/preparer", methods={"PUT"})
    //  */
    // public function preparerCommande(Commande $commande): JsonResponse
    // {
    //     $this->denyAccessUnlessGranted('ROLE_BARMAN');

    //     $commande->setStatus('prête');
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Commande prête'], JsonResponse::HTTP_OK);
    // }

    // /**
    //  * @Route("/api/commandes", methods={"GET"})
    //  */
    // public function getCommandes(CommandeRepository $commandeRepository, Request $request): JsonResponse
    // {
    //     $dateDebut = new \DateTime($request->query->get('dateDebut'));
    //     $dateFin = new \DateTime($request->query->get('dateFin'));

    //     $commandes = $commandeRepository->createQueryBuilder('c')
    //         ->where('c.dateCreation BETWEEN :dateDebut AND :dateFin')
    //         ->setParameter('dateDebut', $dateDebut)
    //         ->setParameter('dateFin', $dateFin)
    //         ->getQuery()
    //         ->getResult();

    //     return $this->json($commandes);
    // }
}
