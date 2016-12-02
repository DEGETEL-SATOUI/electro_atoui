<?php
namespace ElectroAtoui\CoreBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\OrderRepository")
 * @ORM\Table(name="order")
 * @ORM\HasLifecycleCallbacks
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\User", inversedBy="orders", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\ShippingAddress")
     * @ORM\JoinColumn(name="shipping_address_id", referencedColumnName="id")
     */
    private $shipping_address;

    /**
     * @var decimal
     *
     * @ORM\Column(name="total", type="decimal", scale=2)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=125)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_valid", type="boolean")
     */
    private $is_valid;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;

    /**
     * @ORM\OneToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\OrderLine", mappedBy="order")
     */
    private $order_lines;


    public function __construct() {
        $this->order_lines = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set reference
     *
     * @param string $reference
     * @return Order
     */
    private function setReference($reference)
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
     * Set user
     *
     * @param string $user
     * @return Order
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Set total
     *
     * @param string $total
     * @return Order
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }


    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return Order
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }


    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Set shipping_address
     *
     * @param string $shipping_address
     * @return Order
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }


    /**
     * Get shipping_address
     *
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }


    /**
     * Set is_valid
     *
     * @param string $is_valid
     * @return Order
     */
    public function setIsValid($is_valid)
    {
        $this->is_valid = $is_valid;

        return $this;
    }


    /**
     * Get is_valid
     *
     * @return string
     */
    public function getIsValid()
    {
        return $this->is_valid;
    }


    /**
     * Set created_at
     *
     * @param string $created_at
     * @return Order
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
     * Get created_at
     *
     * @return string
     */
    public function getOrderLines()
    {
        return $this->order_lines;
    }


    /**
     * Add order_line
     *
     * @param \ElectroAtoui\CoreBundle\Entity\OrderLine $order_line
     * @return Order
     */
    public function addOrderLine(\ElectroAtoui\CoreBundle\Entity\OrderLine $order_line)
    {
        $this->order_lines[] = $order_line;

        return $this;
    }

    /**
     * Remove order_line
     *
     * @param \ElectroAtoui\CoreBundle\Entity\OrderLine $order_line
     */
    public function removeOrderLine(\ElectroAtoui\CoreBundle\Entity\OrderLine $order_line)
    {
        $this->order_lines->removeElement($order_line);
    }


    /**
     * @ORM\PrePersist()
     */
    public function preSave()
    {
        $this->setReference(mb_strtoupper(uniqid()));
    }

}
