<?php

namespace TestFormStepBundle\Entity\FormTest1;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etape3B
 *
 * @ORM\Table(name="etape3b")
 * @ORM\Entity(repositoryClass="TestFormStepBundle\Repository\Etape3BRepository")
 */
class Etape3B
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
     * @return Etape3B
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}
