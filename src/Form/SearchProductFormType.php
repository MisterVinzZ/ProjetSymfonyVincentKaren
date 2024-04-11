<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchProductFormType extends AbstractType
{
    // SearchProductFormType.php

public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('productName', TextType::class, [
            'label' => 'Nom du produit',
            'required' => true, // Assurez-vous que ce champ est requis
        ]);
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Modifier la classe de données en 'array' car ce n'est pas lié à une entité
            'data_class' => null,
        ]);
    }
}
