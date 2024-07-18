<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    // private $entityManager;
    // private $passwordEncoder;

    // public function __construct(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder)
    // {
    //     $this->entityManager = $entityManager;
    //     $this->passwordEncoder = $passwordEncoder;
    // }

    // /**
    //  * @Route("/api/patron/utilisateur", methods={"POST"})
    //  */
    // public function create(Request $request): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);

    //     $user = new User();
    //     $user->setUsername($data['username']);
    //     $user->setRoles([$data['role']]);
    //     $user->setPassword($this->passwordEncoder->encodePassword($user, $data['password']));

    //     $this->entityManager->persist($user);
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Utilisateur créé'], JsonResponse::HTTP_CREATED);
    // }

    // /**
    //  * @Route("/api/patron/utilisateurs", methods={"GET"})
    //  */
    // public function list(): JsonResponse
    // {
    //     $users = $this->getDoctrine()->getRepository(User::class)->findAll();

    //     return $this->json($users);
    // }

    // /**
    //  * @Route("/api/patron/utilisateur/{id}", methods={"GET"})
    //  */
    // public function detail(User $user): JsonResponse
    // {
    //     return $this->json($user);
    // }

    // /**
    //  * @Route("/api/patron/utilisateur/{id}", methods={"PUT"})
    //  */
    // public function update(Request $request, User $user): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);

    //     $user->setUsername($data['username']);
    //     $user->setRoles([$data['role']]);
    //     if (isset($data['password'])) {
    //         $user->setPassword($this->passwordEncoder->encodePassword($user, $data['password']));
    //     }

    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Utilisateur mis à jour'], JsonResponse::HTTP_OK);
    // }

    // /**
    //  * @Route("/api/patron/utilisateur/{id}", methods={"DELETE"})
    //  */
    // public function delete(User $user): JsonResponse
    // {
    //     $this->entityManager->remove($user);
    //     $this->entityManager->flush();

    //     return new JsonResponse(['status' => 'Utilisateur supprimé'], JsonResponse::HTTP_OK);
    // }
}
