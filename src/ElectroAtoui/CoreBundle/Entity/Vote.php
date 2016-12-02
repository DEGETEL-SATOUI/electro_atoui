<?php
namespace ElectroAtoui\CoreBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\VoteRepository")
 * @ORM\Table(name="vote")
 * @ORM\HasLifecycleCallbacks
 */
class Vote
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
      * @ORM\ManyToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\User")
      * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
      */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\Rate", inversedBy="votes")
     * @ORM\JoinColumn(name="rate_id", referencedColumnName="id", nullable=false)
     */
    protected $rate;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @var text
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;


    public function __construct(\ElectroAtoui\CoreBundle\Entity\Rate $rate, \ElectroAtoui\CoreBundle\Entity\User $user)
    {
        $this->setUser($user);
        $this->setRate($rate);
        $this->getRate()->addVote($this);
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
     * Set user
     *
     * @param string $user
     * @return Vote
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
     * Set rate
     *
     * @param string $rate
     * @return Vote
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }


    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }


    /**
     * Set value
     *
     * @param string $vale
     * @return Vote
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }


    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * Set value
     *
     * @param string $comment
     * @return Vote
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }


    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * Set created_at
     *
     * @param string $created_at
     * @return Vote
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
     * @ORM\PrePersist
     */
    public function increase()
    {
        $this->getRate()->increaseVote();
    }
}
