<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
                'title' => 'Je suis une super question ?',
                'content' => 'Guys ! je me demandais pourquoi les oranges étaient orange,
                et non pas bleu ?',
                'upvote' => 20,
                'nbrOfResponse' => 15,
                'author' => [
                    'name' => 'Jean louis',
                    'picture' => 'https://randomuser.me/api/portraits/women/81.jpg'
                ],
                'createdAt' => strtotime('yesterday')
            ]
        ];

        return $this->render('home/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
