<?php

namespace App\Form;

use App\Entity\Participant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ParticipantEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nomParticipant', null, [
            'label' => 'Nom :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('prenomParticipant', null, [
            'label' => 'Prénom :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('email', null, [
            'label' => 'email :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('event', null, [
            'label' => 'événement :',
            'label_attr' => ['style' => 'margin-left: 20px;'], 
            'attr' => ['class' => 'form-control','style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;'] 
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'appliquer les modifications',
            'attr' => ['style' => 'margin-left: 20px; margin-bottom: 20px;','class' => 'btn btn-primary section-heading-upper'] // Ajoutez une marge à gauche au bouton et en bas
        ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
        ]);
    }
}
