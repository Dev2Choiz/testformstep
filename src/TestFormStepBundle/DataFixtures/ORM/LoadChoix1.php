<?php

namespace Dev\TestFormStepBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use TestFormStepBundle\Entity\FormTest1\Choix1;

class LoadChoix1 extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    public $container;

    public function load(ObjectManager $manager)
    {
        foreach (['etape3A', 'etape3B', 'etape3C'] as $value) {
            $choix1 = new Choix1();
            $choix1->setCodeChoix($value);
            $choix1->setLabelle("Passer par l'étape " . $value);
            $manager->persist($choix1);
            $manager->flush();
        }
    }

    /**
     * Get the order of this fixture
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
