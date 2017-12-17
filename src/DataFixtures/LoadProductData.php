<?php

namespace App\DataFixtures;


use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProductData extends Fixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('product1');
        $product->setPrice(123);
        $product->setDescription('product1');
        $product->setCompany($this->getReference('company1'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('product2');
        $product->setPrice(123);
        $product->setDescription('product2');
        $product->setCompany($this->getReference('company1'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('product3');
        $product->setPrice(123);
        $product->setDescription('product3');
        $product->setCompany($this->getReference('company1'));
        $manager->persist($product);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}