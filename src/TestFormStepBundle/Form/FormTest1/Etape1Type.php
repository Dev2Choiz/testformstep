<?php

namespace TestFormStepBundle\Form\FormTest1;

use FormStepBundle\Form\AbstractStepType;
use TestFormStepBundle\Entity\FormTest1\Etape1;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Etape1Type extends AbstractStepType
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
            'data_class' => Etape1::class,
        ));
    }

    public function settingParamsFields($form)
    {
        // @todo laisser construire le form dans buildForm comme d'habitude
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

        $this->paramsFields = [
            'champText1' => $champText1,
            'champText2' => $champText2
        ];
    }
}
