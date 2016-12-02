<?php
namespace ElectroAtoui\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ElectroAtoui\CoreBundle\Entity\Category;

class CategoriesData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Category();
        $categorie1->setName('Chaises');
        $categorie1->setSlug('chaises');
        $manager->persist($categorie1);

        // $categorie2 = new Category();
        // $categorie2->setName('Meubles');
        // $categorie2->setSlug('meubles');
        // $categorie2->addChildren($categorie1);
        // $manager->persist($categorie2);

        $manager->flush();
    }
}