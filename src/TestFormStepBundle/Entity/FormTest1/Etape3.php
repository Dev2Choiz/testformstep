<?php

namespace TestFormStepBundle\Entity\FormTest1;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entite1
 *
 * @ORM\Table(name="etape3")
 * @ORM\Entity(repositoryClass="TestFormStepBundle\Repository\Etape3Repository")
 */
class Etape3
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="id")
     */
    private $id;

    /**
     * @var Choix1 $choix1
     *
     * @ORM\ManyToOne(targetEntity="TestFormStepBundle\Entity\FormTest1\Choix1")
     * @ORM\JoinColumn(name="choix_codeChoix", referencedColumnName="codeChoix")
     *
     * @Assert\NotBlank(message="Choix obligatoire.")
     */
    private $choix1;



    public function __construct()
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Choix1
     */
    public function getChoix1()
    {
        return $this->choix1;
    }

    /**
     * @param Choix1 $choix1
     * @return Etape3
     */
    public function setChoix1($choix1)
    {
        $this->choix1 = $choix1;
        return $this;
    }

}
