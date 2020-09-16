<?php

namespace App\Form;

use App\Entity\Skills;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SkillType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'Nom de la technologie',
                'attr' => [
                    'placeholder' => 'ex: HTML'
                ]
            ])
            ->add('img', TextType::class, [
                'required' => false,
                'label' => 'Symbole de la technologie'
            ])
            ->add('level', IntegerType::class, [
                'required' => false,
                'label' => 'Niveau d\'acquisition de la technologie',
                'attr' => [
                    'placeholder' => '1:Notion 3:Intermédiaire 5:Autonome'
                ]
            ])

            ->add('save', SubmitType::class, [
                'label' => 'Valider'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Skills::class,
        ]);
    }
}
