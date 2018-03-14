<?php

namespace TestFormStepBundle\Entity\FormTest1;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Entite1
 *
 * @ORM\Table(name="etape3c")
 * @ORM\Entity(repositoryClass="TestFormStepBundle\Repository\Etape3CRepository")
 */
class Etape3C
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="id", type="string", length=255)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="boolean", length=255)
     */
    private $value;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param boolean $value
     * @return Etape3C
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}
