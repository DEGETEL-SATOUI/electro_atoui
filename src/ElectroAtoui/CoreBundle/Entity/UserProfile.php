<?php

namespace ElectroAtoui\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\validator\Constraints as Assert;


/**
 * UserProfile
 *
 * @ORM\Table("user_profile")
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\UserProfileRepository")
 * @ORM\HasLifecycleCallbacks
 */
class UserProfile
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
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=125)
     * @Assert\Choice(choices = {"Monsieur","Madame"}, multiple = false)
     */
    private $gender;

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
     * @Assert\Regex(
     *     pattern="/^([2-9]{2})\s([0-9]{3})\s([0-9]{3})$/",
     *     match=true,
     *     message="Le téléphone doit être sous le format 00 000 000"
     * )
     * @ORM\Column(name="phone", type="string")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=125)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="address_complement", type="string", length=125, nullable=true)
     */
    private $address_complement;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=125)
     */
    private $city;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="/^([0-9]{4})$/",
     *     match=true,
     *     message="Le code postal doit être sous le format 0000"
     * )
     * @ORM\Column(name="zip_code", type="string")
     */
    private $zip_code;


    /**
     * Set first_name
     *
     * @param string $first_name
     * @return UserProfile
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
     * @return UserProfile
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
     * @return UserProfile
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


    /**
     * Set gender
     *
     * @param string $gender
     * @return UserProfile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }


    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * Set city
     *
     * @param string $city
     * @return UserProfile
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }


    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }


    /**
     * Set zip_code
     *
     * @param string $zip_code
     * @return UserProfile
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }


    /**
     * Get zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }


    /**
     * Set address
     *
     * @param string $address
     * @return UserProfile
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }


    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * Set address_complement
     *
     * @param string $address_complement
     * @return UserProfile
     */
    public function setAddressComplement($address_complement)
    {
        $this->address_complement = $address_complement;

        return $this;
    }


    /**
     * Get address_complement
     *
     * @return string
     */
    public function getAddressComplement()
    {
        return $this->address_complement;
    }
}

