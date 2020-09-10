<?php

namespace App\Controller;

use App\Entity\Skills;
use App\Form\SkillType;
use App\Repository\SkillsRepository;
use App\Controller\AdminSkillController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminSkillController extends AbstractController
{
    /**
     * @Route("/admin/skill", name="adminSkill")
     */
    public function index(SkillsRepository $skillsRepository)
    {
        $skills = $skillsRepository->findAll();

        return $this->render('admin/adminSkill.html.twig', [
            'skills' => $skills,
        ]);
    }

    /**
     * @Route("/admin/skill/create", name="skillCreate")
     */

     
    public function createSkill(Request $request)
    {
        $skills = new Skills();
        $form = $this->createForm(SkillType::class, $skills);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($skills);
            $manager->flush();

            $this->addFlash(
                'success',
                'La compétence est bien ajoutée'
            );

        }

        return $this->render('admin/adminSkillForm.html.twig', [
            'formulaireSkill' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/skill/delete-{id}", name="skillDelete")
     */

    public function deleteSkill(SkillsRepository $skillsRepository, $id){
        $skill = $skillsRepository->find($id);

        $manager = $this->getDoctrine()->getManager();
        $manager-> remove($skill);
        $manager->flush();

        return $this->redirectToRoute('adminSkill');
     }

     /**
     * @Route("/admin/skill/update-{id}", name="skillUpdate")
     */

    public function updateSkill(SkillsRepository $skillsRepository, $id, Request $request){
        $skill = $skillsRepository->find($id);

        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($skill);
            $manager->flush();
            return $this->redirectToRoute('adminSkill');
        }

        return $this->render('admin/adminSkillForm.html.twig', [
            'formulaireSkill' => $form->createView()
        ]);
     }
}
