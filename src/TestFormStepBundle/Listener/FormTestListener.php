<?php

namespace TestFormStepBundle\Listener;

use FormStepBundle\Event\FormStepEvent;
use FormStepBundle\Service\MetaData;
use TestFormStepBundle\Entity\FormTest1\ObjectForm;

class FormTestListener
{

    public function etape2preSetData(FormStepEvent $event)
    {
        $data = $event->getData();
        if (null !== $data->getEtape2() && $data->getEtape2()->isFinForm()) {
            $event->setFinalStep(true);
        }
    }

    public function etape3PreNextStep(FormStepEvent $event)
    {
        // Ici on peut changer l'etape suivante et les données
        $data = $event->getData();
        $data->getEtape3A()->setValue("pré-rempli par l'event de l'etape3");
        $event->setNextStep($data->getEtape3()->getChoix1()->getCodeChoix());
    }

    public function etape3PrePreviousStep(FormStepEvent $event)
    {
        $event->getData();
    }

    public function etape3XPrePreviousStep(FormStepEvent $event)
    {
        $event->setNextStep('etape3');
    }

    public function etape3XPreNextStep(FormStepEvent $event)
    {
        $event->setNextStep('etape4');
    }

    public function etape3PreSetData(FormStepEvent $event)
    {
        /** @var MetaData $metadata */
        $event->getData();
    }

    public function etape4PrePreviousStep(FormStepEvent $event)
    {
        $event->setNextStep('etape3');
    }

    public function etape4preSetData(FormStepEvent $event)
    {
        /** @var ObjectForm $data */
        $data = $event->getData();

        $choix = $data->getEtape4()->getChoix();
        if ('ETAPE3' === $choix) {
            $event->setFinalStep(false);
        } else if ('FINFORM' === $choix) {
            // c'est le dernier formulaire
        }
    }


    public function etape4PreNextStep(FormStepEvent $event)
    {
        /** @var ObjectForm $data */
        $data = $event->getData();

        $choix = $data->getEtape4()->getChoix();
        if ('ETAPE3' === $choix) {
            $event->setNextStep('etape3');
        }
    }

}
