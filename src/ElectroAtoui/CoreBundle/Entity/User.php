<?php
namespace ElectroAtoui\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\Order", mappedBy="user")
     */
    private $orders;

    /**
     * @ORM\OneToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\ShippingAddress", mappedBy="user")
     */
    private $shipping_addresses;

    /**
     * @ORM\OneToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\UserDocument", mappedBy="user")
     */
    private $documents;

    /**
     * @ORM\OneToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\UserProfile", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    private $profile;


    public function __construct()
    {
        parent::__construct();

        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shipping_addresses = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get orders
     *
     * @return \ElectroAtoui\CoreBundle\Entity\Order
     */
    public function getOrders()
    {
        return $this->orders;
    }


    /**
     * Get orders
     *
     * @return \ElectroAtoui\CoreBundle\Entity\ShippingAddress
     */
    public function getShippingAddresses()
    {
        return $this->shipping_addresses;
    }

    /**
     * Get User Documents
     *
     * @return \ElectroAtoui\CoreBundle\Entity\UserDocument
     */
    public function getDocuments()
    {
        return $this->documents;
    }


    /**
     * Add order
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Order $order
     * @return User
     */
    public function addOrder(\ElectroAtoui\CoreBundle\Entity\Order $order)
    {
        $this->orders[] = $order;

        return $this;
    }


    /**
     * Remove order
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Order $order
     */
    public function removeOrder(\ElectroAtoui\CoreBundle\Entity\Order $order)
    {
        $this->orders->removeElement($order);
    }


    /**
     * Add document
     *
     * @param \ElectroAtoui\CoreBundle\Entity\UserDocument $document
     * @return User
     */
    public function addDocument(\ElectroAtoui\CoreBundle\Entity\UserDocument $document)
    {
        $this->documents[] = $document;

        return $this;
    }


    /**
     * Remove document
     *
     * @param \ElectroAtoui\CoreBundle\Entity\UserDocument $document
     */
    public function removeDocument(\ElectroAtoui\CoreBundle\Entity\UserDocument $document)
    {
        $this->documents->removeElement($document);
    }


    /**
     * Add shipping_address
     *
     * @param \ElectroAtoui\CoreBundle\Entity\ShippingAddress $shipping_address
     * @return User
     */
    public function addShippingAddress(\ElectroAtoui\CoreBundle\Entity\ShippingAddress $shipping_address)
    {
        $this->shipping_addresses[] = $shipping_address;

        return $this;
    }


    /**
     * Remove shipping_address
     *
     * @param \ElectroAtoui\CoreBundle\Entity\ShippingAddress $shipping_address
     */
    public function removeShippingAddress(\ElectroAtoui\CoreBundle\Entity\ShippingAddress $shipping_address)
    {
        $this->shipping_addresses->removeElement($shipping_address);
    }


    /**
     * Set profile
     *
     * @param string $profile
     * @return User
     */
    public function setProfile(\ElectroAtoui\CoreBundle\Entity\UserProfile $profile)
    {
        $this->profile = $profile;

        return $this;
    }


    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

}
