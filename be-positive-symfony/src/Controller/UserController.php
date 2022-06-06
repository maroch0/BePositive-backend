<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/** @Route("/api", name="api") */
class UserController extends AbstractController
{
    /** @Route("/register", name="register", methods={"POST"}) */
    public function createUser(Request $request, UserRepository $userRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $userRepository->createUser($data);
        return $this->json([
            'message' => 'Se ha insertado un nuevo usuario',
        ], Response::HTTP_OK);
    }

    /** @Route("/login", name="login", methods={"GET"}) */
    public function signIn(Request $request, UserRepository $userRepository): Response
    {
        $credentials = json_decode($request->getContent(), true);
        $result = $userRepository->checkUser($credentials);

        return $this->json([
            'message' => $result,
        ], Response::HTTP_OK);
    }
}
