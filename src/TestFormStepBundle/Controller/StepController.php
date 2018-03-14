<?php

namespace TestFormStepBundle\Controller;

use FormStepBundle\Form\FormStepType;
use TestFormStepBundle\Entity\FormTest1\ObjectForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StepController extends Controller
{
    protected $currentStep = null;
    protected $nextStep = null;

    public function formulaireAction()
    {
        $svcFormStep = $this->get('form_step.form_step');
        $objectForm = new ObjectForm();
        $svcFormStep->setFormName('formtest1')
            ->setObjectData($objectForm)
            ->setFormTypeClass(FormStepType::class);
        $listStep = $svcFormStep->getListStep();
        return $this->render('TestFormStepBundle:Step:formulaire.html.twig', array(
            'listStep' => $listStep,
            'currentStep' => current($listStep),
            'offset' => 0
        ));
    }

    /**
     * @Route("/step/{currentStep}/{target}", name="test_form_step_step")
     * @Route("/step/{currentStep}", name="test_form_step_step_debut")
     * @Route("/step", name="test_form_step_step_noParam")
     */
    public function stepAction(Request $request, $currentStep = null, $target = null)
    {
        $svcFormStep = $this->get('form_step.form_step');
        $objectForm = new ObjectForm();
        $svcFormStep->setFormName('formtest1')
            ->setObjectData($objectForm)
            ->setFormTypeClass(FormStepType::class);

        $this->currentStep = $currentStep;
        $svcFormStep->setRequest($request);
        $form = $svcFormStep->generateForm($this->currentStep);
        $encType = $svcFormStep->getEncType();


        $form->initialize();
        $form->handleRequest($request);
        if ($request->isMethod('POST') && $form->isSubmitted()) {
            if ($svcFormStep->isPartiallyValid($form, $this->currentStep)) {
                if ($svcFormStep->isFinalStep() && $svcFormStep->pastStepsAreValid($form) && 'previous' !== $target) {
                    // Fin du formulaire qui est valide
                    return $this->getEndFormJsonResponse($objectForm, true);
                }

                $form = $svcFormStep->changeStep($target);
                $this->currentStep = $svcFormStep->getCurrentStep();
            }
        }

        return $this->getJsonResponse($form, $objectForm, $encType);
    }

    public function getJsonResponse($form, $object, $encType, $success = true, $end = false)
    {
        $view = $this->render('TestFormStepBundle:Step/partial:step.html.twig', array(
            'form' => $form->createView(),
            'currentStep' => $this->currentStep,
        ))->getContent();
        $preview = $this->render('TestFormStepBundle::dump.html.twig', array(
            'variable' => $object
        ))->getContent();
        $data = [
            'view'        => $view,
            'preview'     => $preview,
            'currentStep' => $this->currentStep,
            'success'     => $success,
            'encType'     => $encType,
            'end'         => $end
        ];
        return new JsonResponse($data);
    }

    public function getEndFormJsonResponse($object, $end = false)
    {
        $view = $this->render('TestFormStepBundle:Step/partial:endForm.html.twig', array(
            'variable' => $object,
        ))->getContent();
        $data = [
            'view'        => $view,
            'end'         => $end
        ];
        return new JsonResponse($data);
    }
}
