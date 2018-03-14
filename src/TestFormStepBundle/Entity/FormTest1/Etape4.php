<?php

namespace TestFormStepBundle\Entity\FormTest1;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entite1
 *
 * @ORM\Table(name="etape4")
 * @ORM\Entity(repositoryClass="TestFormStepBundle\Repository\Etape4Repository")
 */
class Etape4
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="id", type="string", length=255)
     */
    private $id;

    /**
     * @var string $choix
     *
     * @ORM\Column(name="choix", type="string", length=20)
     */
    private $choix;


    /**
     * @var UploadedFile $file
     *
     * @Assert\File(maxSize="10M")
     */
    private $file;



    public function __construct()
    {
        $this->choix = [
            'etape3' => "Revenir à l'etape"
        ];
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
     * @return Etape4
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * @param string $choix
     * @return Etape4
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;
        return $this;
    }


    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadedFile $file
     * @return Etape4
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }
}
