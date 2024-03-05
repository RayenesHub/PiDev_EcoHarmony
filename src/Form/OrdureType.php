<?php

namespace App\Form;


use App\Entity\Centre;
use App\Entity\Ordure;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class OrdureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('centre', EntityType::class, [
            'class' => Centre::class, 
            'label' => 'Centre :',
            'choice_label' => 'nom',
            'label_attr' => ['style' => 'margin-left: 30%;'],
            'attr' => ['class' => 'form-control',
            'style' => 'margin-left:50px; margin-bottom: 10px;width: 300px; 
            border-radius: 20px;
            background-color: #cccccc; 
            border: 1px solid #999999; 
            padding: 10px; 
            width: 250px; 
            box-sizing: border-box; 
            transition: background-color 0.3s ease; '],
        ])   
        ->add('categorie', null, [
            'label' => 'Catégorie :',
            'label_attr' => ['style' => 'margin-left: 30%;'], 
            'attr' => ['class' => 'form-control', 
            'placeholder'=>'Saisir la catégorie' ,
            'style' => 'margin-left: 30px; margin-bottom: 10px;width: 300px; 
            border-radius: 20px;
            background-color: #cccccc; 
            border: 1px solid #999999; 
            padding: 10px; 
            width: 250px; 
            box-sizing: border-box; 
            transition: background-color 0.3s ease; '],
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le champ categorie est obligatoire.' // Custom message here
                ])
             ] 
        ])
        ->add('description', null, [
            'label' => 'Description :',
            'label_attr' => ['style' => 'margin-left: 30%'], 
            'attr' => ['class' => 'form-control',
            'placeholder' => 'Saisir une description ici...',
            'style' => 'margin-left: 20px; margin-bottom: 10px;width: 300px;
            border-radius: 20px;
            background-color: #cccccc; 
            border: 1px solid #999999; 
            padding: 10px; 
            width: 250px; 
            box-sizing: border-box; 
            transition: background-color 0.3s ease;'
            ] 
        ])
       
        ->add('source', null, [
            'label' => 'Source :',
            'label_attr' => ['style' => 'margin-left: 30%;'], 
            'attr' => ['class' => 'form-control',
            'placeholder' => 'Donner une source',
            'style' => 'margin-left: 50px; margin-bottom: 10px;width: 300px;
            border-radius: 20px;
            background-color: #cccccc; 
            border: 1px solid #999999; 
            padding: 10px; 
            width: 250px; 
            box-sizing: border-box; 
            transition: background-color 0.3s ease;'] 
        ])
  

        ->add('etat', ChoiceType::class, [
            'label' => 'Etat',
            'choices' => [
                'Dangereux' => 'dangereux',
                'Recyclable' => 'recyclable',
                'Non Recyclable' => 'non_recyclable',
            ],
            'expanded' => true, 
            'multiple' => false, 
            'data' => 'recyclable',
            'label_attr' => ['style' => 'margin-left: 30%;'],
            'attr' => ['style'=> 'margin-left: 30%;border: none;'],
            'choice_attr' =>  ['class' => 'custom-radio', 'style' => 'width: 200px;'],
            
        ])
        
        ->add('submit', SubmitType::class, [
            'label' => 'Valider',
            'attr' => ['style' => ' margin-top:50px;  margin: auto; display: block; font-size: 1.2em; padding: 10px 20px; border-radius: 5px; background-color: #4CAF50; color: white; border: none; cursor: pointer; transition: background-color 0.3s;
            ','class' => 'btn btn-primary section-heading-upper'] // Ajoutez une marge à gauche au bouton et en bas
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ordure::class,
        ]);
    }
}