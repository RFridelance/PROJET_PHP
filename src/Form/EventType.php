<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de l\'événement',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de l\'événement',
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de l\'événement',
            ])
            ->add('participant_max', IntegerType::class, [
                'label' => 'Nombre maximum de participants',
            ])
            ->add('public', CheckboxType::class, [
                'label' => 'Événement public',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Créer l\'événement',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
