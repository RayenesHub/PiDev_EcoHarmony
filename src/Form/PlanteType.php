<?php

namespace App\Form;

use App\Entity\Plante;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\DataTransformerInterface; // Importez cette interface
use Symfony\Component\Form\Exception\TransformationFailedException; // Importez cette exception si vous l'utilisez

class PlanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('famille')
            ->add('description')
            ->add('jardin')
            ->add('image', FileType::class, [
                'label' => ' Image',
                'required' => false,
            ]);
    
        // Add the missing semicolon
        $builder->get('image')->addModelTransformer(new class() implements DataTransformerInterface {
            public function transform($value)
            {
                if ($value instanceof \Symfony\Component\HttpFoundation\File\File) {
                    return $value->getFilename();
                }
    
                return null;
            }
    
            public function reverseTransform($value)
            {
                if ($value instanceof \Symfony\Component\HttpFoundation\File\UploadedFile) {
                    return $value;
                }
    
                if (is_string($value)) {
                    // Adjust the container access based on your implementation
                    // Example: $uploadDirectory = $options['container']->getParameter('kernel.project_dir') . '/public/animal_images/';
                    $uploadDirectory = ''; // Update with the correct path
                    $filePath = $uploadDirectory . $value;
    
                    if (file_exists($filePath)) {
                        return new \Symfony\Component\HttpFoundation\File\File($filePath);
                    }
    
                    throw new TransformationFailedException("File not found: $value");
                }
    
                return null;
            }
        });
    }
          

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Plante::class,
        ]);
    }
}
