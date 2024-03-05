<?php

namespace App\Form;


use App\Entity\Centre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CentreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            
        ->add('nom', null, [
            'label' => 'Nom du centre :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('emplacement', null, [
            'label' => 'Emplacement du centre :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('capacite', null, [
            'label' => 'Capacité du centre :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 600px;'] 
        ])
        ->add('responsable', null, [
            'label' => 'Nom du responsable :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 600px;'] 
        ])
        ->add('image', null, [
            'label' => 'Vue :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 600px;'] 
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
            'data_class' => Centre::class,
        ]);
    }
}