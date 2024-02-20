<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cin', TextType::class)
            ->add('nom', null, [
                'label' => 'Nom ',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom',

                ],
                'empty_data' => $options['data']->getNom(),
            ])
            ->add('prenom', null, [
                'label' => 'Prenom ',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Prenom',
                ],
                'empty_data' => $options['data']->getPrenom(),
            ])
            ->add('email', null, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                ],
                'empty_data' => $options['data']->getEmail(),
            ])
            ->add('mdp', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['placeholder' => 'Mot de passe'],
                    'empty_data' => $options['data']->getMdp(), // Set the existing value as default
                ],
                'second_options' => [
                    'label' => 'Confirmation du mot de passe',
                    'attr' => ['placeholder' => 'Confirmez votre mot de passe'],
                    'empty_data' => $options['data']->getMdp(), // Set the existing value as default
                ],
            ])
            ->add('adresse', null, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Adresse',
                ],
                'empty_data' => $options['data']->getAdresse(),
            ])
            ->add('numerotel', null, [
                'label' => 'Numéro de téléphone',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numéro de téléphone',
                ],
                'empty_data' => $options['data']->getNumerotel(),
            ])
            
            ->add('image', FileType::class, [
                'label' => 'Votre Image (JPG, JPEG, PNG file)',
                'mapped' => false,
                'required' => false,
                'attr' => ['accept' => 'image/*', 'placeholder' => 'Choisissez une image'],
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
   
}
