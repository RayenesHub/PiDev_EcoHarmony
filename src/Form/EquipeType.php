<?php

namespace App\Form;


use App\Entity\Equipe;
use App\Entity\Plage;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('plage', EntityType::class, [
            'class' => Plage::class, 
            'choice_label' => 'surnom', 
        ])   
        ->add('nom', null, [
            'label' => 'Nom :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('member', null, [
            'label' => 'Cambien de membre :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
       
        ->add('mission', null, [
            'label' => 'Tâche à réaliser :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 600px;'] 
        ])
        ->add('date', null, [
            'label' => 'Date de création :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 10px;'] 
        ])
        ->add('debut', null, [
            'label' => 'Heure de début :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 10px;'] 
        ])
        ->add('fin', null, [
            'label' => 'Heure de fin :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 10px;'] 
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Valider',
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 20px;','class' => 'btn btn-primary section-heading-upper'] // Ajoutez une marge à gauche au bouton et en bas
        ]);
        
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipe::class,
        ]);
    }
}