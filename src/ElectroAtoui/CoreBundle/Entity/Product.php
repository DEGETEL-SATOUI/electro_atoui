<?php

namespace ElectroAtoui\CoreBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Product
 *
 * @ORM\Table("product")
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\OneToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\Image", mappedBy="product")
     */
    private $images;

     /**
     * @ORM\ManyToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\Category", inversedBy="products")
     * @ORM\JoinTable(name="category_product")
     */
    private $categories;

    /**
     * @ORM\OneToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\Rate", cascade={"all"})
     * @ORM\JoinColumn(name="rate_id", referencedColumnName="id")
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=125, unique=true)
     */
    private $name;

    /**
     * @var string
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", length=125)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=125)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="text", length=125)
     */
    private $short_description;

    /**
     * @var decimal
     *
     * @ORM\Column(name="price", type="decimal", scale=2)
     */
    private $price;

    /**
     * @var decimal
     *
     * @ORM\Column(name="sale_price", type="decimal", scale=2, options={"default": 0.00})
     */
    private $sale_price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="for_sale", type="boolean", options={"default": 0})
     */
    private $for_sale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

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


    public function __construct() {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Product
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
     * Set reference
     *
     * @param string $reference
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }


    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set short_description
     *
     * @param string $short_description
     * @return Product
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;

        return $this;
    }


    /**
     * Get short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }


    /**
     * Set rate
     *
     * @param rate $rate
     * @return Product
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }


    /**
     * Get rate
     *
     * @return rate
     */
    public function getRate()
    {
        return $this->rate;
    }


    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    /**
     * Set slug
     *
     * @param string $slug
     * @return Product
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
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * Set sale_price
     *
     * @param float $SalePrice
     * @return Product
     */
    public function setSalePrice($sale_price)
    {
        $this->sale_price = $sale_price;

        return $this;
    }


    /**
     * Get sale_price
     *
     * @return float
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }


    /**
     * Set for_sale
     *
     * @param boolean $for_sale
     * @return Product
     */
    public function setForSale($for_sale)
    {
        $this->for_sale = $for_sale;

        return $this;
    }


    /**
     * Get for_sale
     *
     * @return boolean
     */
    public function getForSale()
    {
        return $this->for_sale;
    }

    /**
     * Set is_active
     *
     * @param boolean $is_active
     * @return Product
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }


    /**
     * Get is_active
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }


    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Set created_at
     *
     * @param string $created_at
     * @return Product
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }


    /**
     * Get created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }


    /**
     * Set update_at
     *
     * @param string $update_at
     * @return Product
     */
    public function setUpdatedAt($update_at)
    {
        $this->update_at = $update_at;

        return $this;
    }


    /**
     * Get update_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->update_at;
    }


    /**
     * Get images
     *
     * @return \ElectroAtoui\CoreBundle\Entity\Image
     */
    public function getImages()
    {
        return $this->images;
    }


    /**
     * Add image
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Image $image
     * @return Product
     */
    public function addImage(\ElectroAtoui\CoreBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }


    /**
     * Remove image
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Image $image
     */
    public function removeImage(\ElectroAtoui\CoreBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }


    /**
     * Get Categories
     *
     * @return \ElectroAtoui\CoreBundle\Entity\Category
     */
    public function getCategories()
    {
        return $this->categories;
    }


    /**
     * Add categories
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Category $category
     * @return Product
     */
    public function addCategory(\ElectroAtoui\CoreBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Category $category
     */
    public function removeCategory(\ElectroAtoui\CoreBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }


    public function getCategory()
    {
        return $this->getCategories()->first();
    }


    public function isAvailableToBuy()
    {
        if ($this->is_active && $this->quantity > 0) {
            return true;
        }
        return false;
    }


    public function getRateValue()
    {
        if (!$this->getRate()) {
            return 0;
        }

        $total = $this->getRate()->getTotal();

        if (!$total) {
            return 0;
        }

        return (int)$total;
    }


    public function getRateCount()
    {
        if (!$this->getRate()) {
            return 0;
        }

        return $this->getRate()->getVotes()->count();
    }


    public function isRating($user)
    {
        if (empty($user)
          || !($user instanceof \ElectroAtoui\CoreBundle\Entity\User)) {
            return true;
        }

        if (!$this->getRate()) {
            return false;
        }

        return $this->getRate()->isRating($user);
    }


    public function getAbsoluteUrl()
    {
        return $this->slug.'/'.$this->id;
    }
}


