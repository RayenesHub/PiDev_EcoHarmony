<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ResetPasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('mdp', PasswordType::class, [
            'label' => 'Entrez votre mot de passe',
            'attr' => [
                'class' => 'form-control'
            ],
            'constraints' => [
                new Length([
                    'min' => 8,
                    'minMessage' => 'Le mot de passe doit comporter au moins {{ limit }} caractères.',
                ]),
                new NotBlank([
                    'message' => 'Veuillez entrer votre mot de passe',
                ]),
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}