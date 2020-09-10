<?php

namespace App\Controller;

use App\Controller\HomeController;
use App\Repository\SkillsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SkillsRepository $skillRepository)
    {
        $skills = $skillRepository->findAll();

        return $this->render('/index.html.twig', [
            'skills' => $skills,
        ]);
    }
}
