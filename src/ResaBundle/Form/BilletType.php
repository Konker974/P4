<?php

namespace ResaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;



class BilletType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
        ->add('prenom')
        ->add('dateNaissance', DateType::class, array('widget' => 'single_text', 'input'=>'string'))
        ->add('pays', CountryType::class)
        ->add('dateVisite', DateType::class, array('widget' => 'single_text', 'input'=>'string'))
        ->add('numSerie' , TextType::class, array('data'=>date('U')))
        ->add('type', ChoiceType::class, array('choices'=>array('Journee'=>'Journee', 'Demi-journee'=>'Demi-journee')))
        ->add('reduction', CheckboxType::class,array('value' => 0, 'required'=>false))
        ->add('prixBillet', MoneyType::class, array('mapped'=>false, 'disabled'=>true, 'data'=>0));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ResaBundle\Entity\Billet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'resabundle_billet';
    }


}
