<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nomEvent', null, [
            'label' => 'Nom :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('lieuxEvent', null, [
            'label' => 'Lieux :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('start', null, [
            'label' => 'date de début',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 10px;'] 
        ])
        ->add('end', null, [
            'label' => 'date de fin',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 10px;'] 
        ])
        ->add('descriptionEvent', null, [
            'label' => 'Description :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('afficheEvent', null, [
            'label' => 'Lien Affiche :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Appliquer les modifications',
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 20px;','class' => 'btn btn-primary section-heading-upper'] // Ajoutez une marge à gauche au bouton et en bas
        ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
