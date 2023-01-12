<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        $data['titulo'] = 'pagina teste';
        $data['mensagem'] = 'Aprendendo template symfony';
        $data['frutas'] = [
            [
                'nome' => "banada",
                'valor' => 1.99
            ],
            [
                'nome' => "abacate",
                'valor' => 2.66
            ],
            [
                'nome' => "morando",
                'valor' => 2.33
            ]
            ];


        return $this->render('home/index.html.twig', $data);
    }
    /**
     * @Route("/detalhes/{id}")
     */
    public function detalhes($id): Response
    {
        $data['id'] = $id;
        $data['titulo'] = 'pagina teste';
        $data['mensagem'] = 'Aprendendo template symfony';

        return $this->render('home/detalhes.html.twig', $data);
    }
}