<?php

namespace App\Controller;

use App\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GenreController extends AbstractController
{
    #[Route('/genre', name: 'app_genre')]
    public function index(): Response
    {
        return $this->render('genre/index.html.twig', [
            'controller_name' => 'GenreController',
        ]);
    }

    #[Route('/genre/{id}', name: 'app_genre_show')]
    public function show(Genre $genre): Response
    {
        return $this->render('genre/show.html.twig', [
            'genre' => $genre
        ]);
    }

}
