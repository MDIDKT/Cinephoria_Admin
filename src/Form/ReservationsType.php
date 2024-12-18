<?php

namespace App\Form;

use App\Entity\Cinemas;
use App\Entity\Films;
use App\Entity\Reservations;
use App\Entity\Seance;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationsType extends AbstractType
{
    public function buildForm (FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add ('cinemas', EntityType::class, [
                'class' => Cinemas::class,
                'choice_label' => 'nom',
                'label' => 'Choisir un cinéma',
                'attr' => ['class' => 'form-input mt-1 block w-full'],
            ])
            ->add ('films', EntityType::class, [
                'class' => Films::class,
                'choice_label' => 'titre',
                'label' => 'Choisir un film',
                'attr' => ['class' => 'form-input mt-1 block w-full'],
            ])
            ->add ('seances', EntityType::class, [
                'class' => Seance::class,
                'choice_label' => function(Seance $seance) {

                    return $seance->getHeureDebut ()->format ('d/m/Y H:i');
                },
                'label' => 'Choisir une séance',
                'attr' => ['class' => 'form-input mt-1 block w-full'],

                'placeholder' => 'Choisir une séance',
            ])
            ->add ('nombrePlaces', IntegerType::class, [
                'label' => 'Nombre de places',
                'attr' => ['class' => 'form-input mt-1 block w-full', 'min' => 1],
                'required' => true,
            ]);
    }

    public function configureOptions (OptionsResolver $resolver): void
    {
        $resolver->setDefaults ([
            'data_class' => Reservations::class,
        ]);
    }
}
