<?php

namespace TestFormStepBundle\Form\FormTest1;

use FormStepBundle\Form\AbstractStepType;
use TestFormStepBundle\Entity\FormTest1\Etape3A;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Etape3AType extends AbstractStepType
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
            'data_class' => Etape3A::class,
        ));
    }

    public function settingParamsFields($form)
    {
        $value = [
            'type' => TextType::class,
            'options' => [
                'auto_initialize' => false
            ]
        ];
        $this->paramsFields = [
            'value' => $value,
        ];
    }
}
