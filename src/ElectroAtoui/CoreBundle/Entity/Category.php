<?php

namespace ElectroAtoui\CoreBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Category
 *
 * @ORM\Table("category")
 * @Gedmo\Tree(type="nested")
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="left_index", type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="right_index", type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="level", type="integer")
     */
    private $lvl;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    private $root;

    /**
     * @Gedmo\TreePath
     * @ORM\Column(name="path", type="string", length=3000, nullable=true)
     */
    private $path;

    /**
     * @ORM\ManyToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\Product", mappedBy="categories", cascade={"persist"})
     */
    private $products;

    /**
     * @ORM\OneToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\Category", mappedBy="parent", cascade={"persist", "remove"})
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $childrens;

    /**
     * @ORM\ManyToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\Category", inversedBy="childrens")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     * @Gedmo\TreeParent
     */
    private $parent;


    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     * @Gedmo\TreePathSource
     * @ORM\Column(name="name", type="string", length=125, unique=true)
     */
    private $name;

    /**
     * @var string
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", unique=true, length=125)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var file
     */
    public $file;


    public function __construct() {
        $this->childrens = new \Doctrine\Common\Collections\ArrayCollection();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }


    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Category
     */
    public function setPath($path)
    {
        $this->path = $path;
    }


    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * Add children
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Category $children
     * @return Category
     */
    public function addChildren(\ElectroAtoui\CoreBundle\Entity\Category $children)
    {
        $this->childrens[] = $children;
        $children->setParent($this);
        return $this;
    }

    /**
     * Remove children
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Category $children
     */
    public function removeChildren(\ElectroAtoui\CoreBundle\Entity\Category $children)
    {
        $this->childrens->removeElement($children);
        $children->setParent(null);
    }


    /**
     * Remove product
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Product $product
     */
    public function removeProduct(\ElectroAtoui\CoreBundle\Entity\Product $product)
    {
        $this->products->removeElement($product);
    }


    /**
     * Add product
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Product $product
     * @return Category
     */
    public function addProduct(\ElectroAtoui\CoreBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }


    /**
     * Set parent
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Category $parent
     * @return Categorie
     */
    public function setParent(\ElectroAtoui\CoreBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }


    /**
     * Get parent
     *
     * @return \ElectroAtoui\CoreBundle\Entity\Category
     */
    public function getParent()
    {
        return $this->parent;
    }


    /**
     * Get Childrens
     *
     * @return \ElectroAtoui\CoreBundle\Entity\Category
     */
    public function getChildrens()
    {
        return $this->childrens;
    }


    /**
     * Get Products
     *
     * @return \ElectroAtoui\CoreBundle\Entity\Product
     */
    public function getProducts()
    {
        return $this->products;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * has Parent
     *
     * @return boolean
     */
    public function hasParent()
    {
        return !is_null($this->parent);
    }


    /**
     * get Parents
     *
     * @return array
     */
    public function getParents()
    {
        $parents = array();
        $parent  = $this->getParent();

        while ($parent) {
            $parents[] = $parent;
            $parent = $parent->getParent();
        }

        return array_reverse($parents);
    }


    /**
     * get Absolute Url
     *
     * @return string
     */
    public function getAbsoluteUrl()
    {
        $slugs = array();

        foreach ($this->getParents() as $parent) {
            $slugs[] = $parent->getSlug();
        }
        $slugs[] = $this->getSlug();

        return implode('/', $slugs);
    }


    /**
     * to String
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }


    /**
     * get Upload Root Dir
     *
     * @return string
     */
    public function getUploadRootDir()
    {
        return __dir__.'/../../../../web/uploads/categories';
    }


    /**
     * get Absolute Path
     *
     * @return string
     */
    public function getAbsolutePath()
    {
        return  $this->url === null ? null : $this->getUploadRootDir().'/'.$this->url;
    }


    /**
     * get Asset Path
     *
     * @return string
     */
    public function getAssetPath()
    {
        return 'uploads/categories/'.$this->url;
    }


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();

        if (null !== $this->file) {
            $this->url = sha1(uniqid(mt_rand(), true))
                        .'.'
                        .$this->file->guessExtension();
        }
    }


    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(), $this->url);
            unset($this->file);

            if ($this->oldFile != null) {
                unlink($this->tempFile);
            }
        }
    }


    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
    }


    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (file_exists($this->tempFile)) {
            unlink($this->tempFile);
        }
    }
}
