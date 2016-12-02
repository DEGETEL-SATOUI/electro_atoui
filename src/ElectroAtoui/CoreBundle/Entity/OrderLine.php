<?php
namespace ElectroAtoui\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\OrderLineRepository")
 * @ORM\Table(name="order_line")
 */
class OrderLine
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\Order", inversedBy="order_lines", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $order;

    /**
     * @ORM\OneToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    protected $quantity;


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
     * Set quantity
     *
     * @param string $quantity
     * @return OrderLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Set order
     *
     * @param string $order
     * @return OrderLine
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }


    /**
     * Get order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }


    /**
     * Set product
     *
     * @param string $product
     * @return OrderLine
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }


    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

}
