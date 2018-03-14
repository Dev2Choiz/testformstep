<?php

namespace TestFormStepBundle\Entity\FormTest1;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Entite1
 *
 * @ORM\Table(name="choix1")
 * @ORM\Entity(repositoryClass="TestFormStepBundle\Repository\Choix1Repository")
 */
class Choix1
{


    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="codeChoix", type="string", length=255, unique=true)
     */
    private $codeChoix;


    /**
     * @var string
     *
     * @ORM\Column(name="labelle", type="string", length=255)
     */
    private $labelle;

    /**
     * @return string
     */
    public function getCodeChoix()
    {
        return $this->codeChoix;
    }

    /**
     * @param string $codeChoix
     * @return Planet
     */
    public function setCodeChoix($codeChoix)
    {
        $this->codeChoix = $codeChoix;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelle()
    {
        return $this->labelle;
    }

    /**
     * @param string $labelle
     * @return Planet
     */
    public function setLabelle($labelle)
    {
        $this->labelle = $labelle;
        return $this;
    }
}
