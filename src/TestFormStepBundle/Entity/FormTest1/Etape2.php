<?php

namespace TestFormStepBundle\Entity\FormTest1;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entite1
 *
 * @ORM\Table(name="etape2")
 * @ORM\Entity(repositoryClass="TestFormStepBundle\Repository\Etape2Repository")
 */
class Etape2
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
     * @ORM\Column(name="champ_text1", type="string", length=255)
     */
    private $champText1;

    /**
     * @var string
     *
     * @ORM\Column(name="champ_text2", type="string", length=255)
     */
    private $champText2;

    /**
     * @var boolean $finForm
     *
     * @ORM\Column(name="fin_form", type="boolean")
     */
    private $finForm;

    public function __construct()
    {
        $this->finForm = false;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Etape2
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getChampText1()
    {
        return $this->champText1;
    }

    /**
     * @param string $champText1
     * @return Etape2
     */
    public function setChampText1($champText1)
    {
        $this->champText1 = $champText1;
        return $this;
    }

    /**
     * @return string
     */
    public function getChampText2()
    {
        return $this->champText2;
    }

    /**
     * @param string $champText2
     * @return Etape2
     */
    public function setChampText2($champText2)
    {
        $this->champText2 = $champText2;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFinForm()
    {
        return $this->finForm;
    }

    /**
     * @param bool $finForm
     * @return Etape2
     */
    public function setFinForm($finForm)
    {
        $this->finForm = $finForm;
        return $this;
    }
}
