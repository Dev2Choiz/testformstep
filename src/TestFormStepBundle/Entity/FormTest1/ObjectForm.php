<?php

namespace TestFormStepBundle\Entity\FormTest1;

class ObjectForm
{
    /** @var  Etape1 $etape1 */
    protected $etape1;
    /** @var  Etape2 $etape2 */
    protected $etape2;
    /** @var  Etape3 $etape3 */
    protected $etape3;
    /** @var  Etape3A $etape3A */
    protected $etape3A;
    /** @var  Etape3B $etape3B */
    protected $etape3B;
    /** @var  Etape3C $etape3C */
    protected $etape3C;
    /** @var  Etape4 $etape4 */
    protected $etape4;

    /**
     * @return Etape1
     */
    public function getEtape1()
    {
        return $this->etape1;
    }

    /**
     * @param Etape1 $etape1
     * @return ObjectForm
     */
    public function setEtape1($etape1)
    {
        $this->etape1 = $etape1;
        return $this;
    }

    /**
     * @return Etape2
     */
    public function getEtape2()
    {
        return $this->etape2;
    }

    /**
     * @param Etape2 $etape2
     * @return ObjectForm
     */
    public function setEtape2($etape2)
    {
        $this->etape2 = $etape2;
        return $this;
    }

    /**
     * @return Etape3
     */
    public function getEtape3()
    {
        return $this->etape3;
    }

    /**
     * @param Etape3 $etape3
     * @return ObjectForm
     */
    public function setEtape3($etape3)
    {
        $this->etape3 = $etape3;
        return $this;
    }

    /**
     * @return Etape3A
     */
    public function getEtape3A()
    {
        return $this->etape3A;
    }

    /**
     * @param Etape3A $etape3A
     * @return ObjectForm
     */
    public function setEtape3A($etape3A)
    {
        $this->etape3A = $etape3A;
        return $this;
    }

    /**
     * @return Etape3B
     */
    public function getEtape3B()
    {
        return $this->etape3B;
    }

    /**
     * @param Etape3B $etape3B
     * @return ObjectForm
     */
    public function setEtape3B($etape3B)
    {
        $this->etape3B = $etape3B;
        return $this;
    }

    /**
     * @return Etape3C
     */
    public function getEtape3C()
    {
        return $this->etape3C;
    }

    /**
     * @param Etape3C $etape3C
     * @return ObjectForm
     */
    public function setEtape3C($etape3C)
    {
        $this->etape3C = $etape3C;
        return $this;
    }

    /**
     * @return Etape4
     */
    public function getEtape4()
    {
        return $this->etape4;
    }

    /**
     * @param Etape4 $etape4
     * @return ObjectForm
     */
    public function setEtape4($etape4)
    {
        $this->etape4 = $etape4;
        return $this;
    }
}
