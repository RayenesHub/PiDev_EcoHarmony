<?php

namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Nappe;
use App\Entity\Puits;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PuitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('idnappe', EntityType::class, [
            'class' => Nappe::class, 
            'choice_label' => 'idnap', 
        ])
            ->add('idp') 
            ->add('diametre')
            ->add('datefab')  
            ->add('debit')
            ->add('equipement')
            ->add ('Valider',SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Puits::class,
        ]);
    }
}