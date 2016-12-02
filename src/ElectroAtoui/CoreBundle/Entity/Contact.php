<?php
namespace ElectroAtoui\CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * Contact
 *
 * @ORM\Table("contact")
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="name", type="string", length=125)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=90)
     * @Assert\Email(
     *     message = "Le email n'est pas valide",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=160)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="enquiry", type="text")
     */
    private $enquiry;


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
     * @return Contact
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
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Set subject
     *
     * @param string $subject
     * @return Contact
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }


    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Set enquiry
     *
     * @param string $enquiry
     * @return Contact
     */
    public function setEnquiry($enquiry)
    {
        $this->enquiry = $enquiry;

        return $this;
    }


    /**
     * Get enquiry
     *
     * @return string
     */
    public function getEnquiry()
    {
        return $this->enquiry;
    }
}
