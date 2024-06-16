<?php
// src/Form/EventFilterType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, ['required' => false, 'label' => 'Titre'])
            ->add('dateFrom', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date à partir de'
            ])
            ->add('dateTo', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date jusqu\'à'
            ])
            ->add('public', ChoiceType::class, [
                'choices' => [
                    'Tous' => null,
                    'Public' => true,
                    'Privé' => false,
                ],
                'label' => 'Visibilité',
                'required' => false,
            ])
            ->add('filter', SubmitType::class, ['label' => 'Filtrer']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
