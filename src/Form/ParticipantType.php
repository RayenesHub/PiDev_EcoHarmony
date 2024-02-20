<?php

namespace App\Form;

use App\Entity\Participant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ParticipantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomParticipant',null, [
                'label' => 'Nom :',
                'label_attr' => ['style' => 'margin-top: 10px;', 'class' => 'section-heading-upper'],
                'attr' => ['class' => 'input-custom']
            ])
            ->add('prenomParticipant',null, [
                'label' => 'Prenom :',
                'label_attr' => ['style' => 'margin-top: 10px;', 'class' => 'section-heading-upper'],
                'attr' => ['class' => 'input-custom']
            ])
            ->add('email',null, [
                'label' => 'Email :',
                'label_attr' => ['style' => 'margin-top: 10px;', 'class' => 'section-heading-upper'],
                'attr' => ['class' => 'input-custom']
            ])
            ->add('event',HiddenType::class,[
                'label' => false,
                'label_attr' => ['style' => 'margin-top: 10px;', 'class' => 'section-heading-upper'],
                'attr' => ['class' => 'input-custom'],
                'disabled' => true, // Rend le champ non modifiable
                'data' => $options['event'], // Pré-remplit le champ avec l'événement passé
            ])
            ->add('ajouter', SubmitType::class, [
                'label' => 'Participer',
                
                'attr' => ['style' => 'margin-top: 10px;','class' => 'btn btn-primary section-heading-upper']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
            'event' => null, // Option pour passer l'événement au formulaire
        ]);
    }
}
