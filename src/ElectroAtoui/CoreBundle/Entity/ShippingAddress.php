<?php
namespace ElectroAtoui\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\ShippingAddressRepository")
 * @ORM\Table(name="shipping_address")
 */
class ShippingAddress
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\User", inversedBy="shipping_addresses", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=125)
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=125)
     */
    private $last_name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=30, nullable=false)
     */
    private $phone;


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
     * Set user
     *
     * @param string $user
     * @return ShippingAddress
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
     * Set first_name
     *
     * @param string $first_name
     * @return ShippingAddress
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }


    /**
     * Get first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }


    /**
     * Set last_name
     *
     * @param string $last_name
     * @return ShippingAddress
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }


    /**
     * Get last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }


    /**
     * Set phone
     *
     * @param string $phone
     * @return ShippingAddress
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }


    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

}
