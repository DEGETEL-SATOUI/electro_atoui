<?php
namespace ElectroAtoui\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="ElectroAtoui\CoreBundle\Repository\RateRepository")
 * @ORM\Table(name="rate")
 * @ORM\HasLifecycleCallbacks
 */
class Rate
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="ElectroAtoui\CoreBundle\Entity\Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_votes", type="integer")
     */
    private $num_votes = 0;

    /**
     * @var decimal
     *
     * @ORM\Column(name="total", nullable=true, type="decimal", scale=1)
     */
    private $total;

    /**
     * @ORM\OneToMany(targetEntity="ElectroAtoui\CoreBundle\Entity\Vote", mappedBy="rate", cascade={"remove"})
     */
    protected $votes;


    public function __construct(\ElectroAtoui\CoreBundle\Entity\Product $product) {
        $this->votes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setProduct($product);
        $this->getProduct()->setRate($this);
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
     * Set product
     *
     * @param string $product
     * @return Rate
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


    /**
     * Set total
     *
     * @param string $total
     * @return Rate
     */
    private function setTotal($total)
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
     * Set num_votes
     *
     * @param string $num_votes
     * @return Rate
     */
    public function setNumVotes($num_votes)
    {
        $this->num_votes = $num_votes;

        return $this;
    }


    /**
     * Get num_votes
     *
     * @return string
     */
    public function getNumVotes()
    {
        return $this->num_votes;
    }


    /**
     * Get votes
     *
     * @return collection
     */
    public function getVotes()
    {
        return $this->votes;
    }


    /**
     * Get votes
     *
     * @return array
     */
    public function getArrayVotes()
    {
        return $this->votes->toArray();
    }


    /**
     * Add vote
     *
     * @param \ElectroAtoui\CoreBundle\Entity\Vote $vote
     * @return Rate
     */
    public function addVote(\ElectroAtoui\CoreBundle\Entity\Vote $vote)
    {
        $this->votes[] = $vote;

        return $this;
    }


    private function getTotalVotes()
    {
        $somme = 0;

        foreach($this->getVotes() as $vote) {
            $somme += $vote->getValue();
        }

        return $somme;
    }


    public function isRating($user)
    {
        $vote = function($k, $e) use ($user) {
            return $e->getUser() == $user;
        };
        return $this->getVotes()->exists($vote);
    }


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preSave()
    {
        $num_votes = $this->getVotes()->count() > 0 ? $this->getVotes()->count() : 1;

        $this->setTotal(
            round(($this->getTotalVotes() / $num_votes), 1)
        );
    }


    public function increaseVote()
    {
        $this->num_votes ++;
    }
}
