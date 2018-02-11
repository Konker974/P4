<?php

namespace ResaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BilletType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
        ->add('prenom')
        ->add('dateNaissance', DateType::class, array('years'=>range(date('1930'), date('Y'))))
        ->add('pays', CountryType::class)
        ->add('dateVisite', DateTimeType::class, array('date_widget'=>'single_text', 'hours'=>array(10,14), 'minutes'=>array(0,30)))
        ->add('numSerie' , TextType::class, array('data'=>date('U')))
        ->add('tarif', MoneyType::class, array('data'=>'10'))
        ->add('type', ChoiceType::class, array('choices'=>array('Journee'=>'Journee', 'Demi-journee'=>'Demi-journee')))
        ->add('prix', MoneyType::class, array('data'=>'10'));
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
