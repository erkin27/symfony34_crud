<?php

namespace App\DataFixtures;


use App\Entity\Company;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCompanyData extends Fixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $company = new Company();
        $company->setName('company1');
        $this->setReference('company1', $company);
        $manager->persist($company);

        $company = new Company();
        $company->setName('company2');
        $this->setReference('company2', $company);
        $manager->persist($company);

        $company = new Company();
        $company->setName('company3');
        $this->setReference('company3', $company);
        $manager->persist($company);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}