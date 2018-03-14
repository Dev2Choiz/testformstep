<?php

namespace TestFormStepBundle\Form\FormTest1;

use TestFormStepBundle\Entity\FormTest1\Etape1;
use FormStepBundle\Form\AbstractStepType;
use TestFormStepBundle\Entity\FormTest1\Etape2;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Etape2Type extends AbstractStepType
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
            'data_class' => Etape2::class,
        ));
    }

    public function settingParamsFields($form)
    {
        $champText1 = [
            'type' => TextType::class,
            'options' => [
                'auto_initialize' => false
            ]
        ];
        $champText2 = [
            'type' => TextType::class,
            'options' => [
                'auto_initialize' => false
            ]
        ];

        $finForm = [
            'type' => CheckboxType::class,
            'options' => [
                'auto_initialize' => false,
                'label' => 'Mettre fin au formulaire',
            ]
        ];

        $this->paramsFields = [
            'champText1' => $champText1,
            'champText2' => $champText2,
            'finForm' => $finForm
        ];
    }
}
