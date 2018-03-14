<?php

namespace TestFormStepBundle\Form\FormTest1;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use FormStepBundle\Form\AbstractStepType;
use TestFormStepBundle\Entity\FormTest1\Etape4;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Etape4Type extends AbstractStepType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function preConfigureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Etape4::class,
        ));
    }

    public function settingParamsFields($form)
    {
        $choix = [
            'type' => ChoiceType::class,
            'options' => [
                'auto_initialize' => false,
                'choices' => [
                    'Revenir à l\' étape 3.' => 'ETAPE3',
                    'Fin du formulaire.'     => 'FINFORM',
                ],
                'choices_as_values' => true,
                'expanded' => true,
            ]
        ];
        $file = [
            'type' => FileType::class,
            'options' => [
                'auto_initialize' => false,
                'label' => 'Fichier'
            ]
        ];

        $this->paramsFields = [
            'choix' => $choix,
            'file' => $file,
        ];
    }
}
