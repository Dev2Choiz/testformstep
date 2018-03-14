<?php

namespace TestFormStepBundle\Form\FormTest1;

use FormStepBundle\Form\AbstractStepType;
use TestFormStepBundle\Entity\FormTest1\Choix1;
use TestFormStepBundle\Entity\FormTest1\Planet;
use TestFormStepBundle\Entity\FormTest1\Etape3;
use TestFormStepBundle\Entity\Other\Planete;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Etape3Type extends AbstractStepType
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
            'data_class' => Etape3::class,
        ));
    }

    public function settingParamsFields($form)
    {
        $choix1 = [
            'type' => EntityType::class,
            'options' => [
                'auto_initialize' => false,
                'class' => Choix1::class,
                'choice_label' => 'labelle',
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
            'choix1' => $choix1,
            'file' => $file,
        ];
    }
}
