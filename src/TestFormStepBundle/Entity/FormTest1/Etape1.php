<?php

namespace TestFormStepBundle\Entity\FormTest1;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape1
 *
 * @ORM\Table(name="etape1")
 * @ORM\Entity(repositoryClass="TestFormStepBundle\Repository\Etape1Repository")
 */

class Etape1
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Etape1
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
     * @return Etape1
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
     * @return Etape1
     */
    public function setChampText2($champText2)
    {
        $this->champText2 = $champText2;
        return $this;
    }
}
