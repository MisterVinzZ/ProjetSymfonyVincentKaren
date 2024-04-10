<?php

// src/Form/ProduitType.php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('prix')
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Figurine' => 'figurine',
                    'Vêtement' => 'vetement',
                    'Accessoire' => 'accessoire',
                    'Décoration' => 'decoration',
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du Produit',
                'mapped' => false, // Ne pas mapper directement à une propriété de l'entité Produit
                'required' => false, // L'image n'est pas obligatoire
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
