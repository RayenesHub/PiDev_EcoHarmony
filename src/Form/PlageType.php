<?php

namespace App\Form;


use App\Entity\Plage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            
        ->add('surnom', null, [
            'label' => 'Surnom de la plage :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('region', null, [
            'label' => 'Lieux :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('pic', null, [
            'label' => 'Description :',
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
            'data_class' => Plage::class,
        ]);
    }
}