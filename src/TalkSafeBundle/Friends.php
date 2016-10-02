<?php

namespace TalkSafeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Friends
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Friends
{




    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="friends")
     * @ORM\JoinColumn(name="user1_id", referencedColumnName="id", onDelete="CASCADE")
     */

    private $userOne;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="friends")
     * @ORM\JoinColumn(name="user2_id", referencedColumnName="id", onDelete="CASCADE")
     */

    private $userTwo;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var integer
     *
     * @ORM\Column(name="accepted", type="integer")
     */

    private $accepted;


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
     * Set accepted
     *
     * @param integer $accepted
     * @return Friends
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * Get accepted
     *
     * @return integer 
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * Set userOne
     *
     * @param \TalkSafeBundle\Entity\User $userOne
     * @return Friends
     */
    public function setUserOne(\TalkSafeBundle\Entity\User $userOne = null)
    {
        $this->userOne = $userOne;

        return $this;
    }

    /**
     * Get userOne
     *
     * @return \TalkSafeBundle\Entity\User 
     */
    public function getUserOne()
    {
        return $this->userOne;
    }

    /**
     * Set userTwo
     *
     * @param \TalkSafeBundle\Entity\User $userTwo
     * @return Friends
     */
    public function setUserTwo(\TalkSafeBundle\Entity\User $userTwo = null)
    {
        $this->userTwo = $userTwo;

        return $this;
    }

    /**
     * Get userTwo
     *
     * @return \TalkSafeBundle\Entity\User 
     */
    public function getUserTwo()
    {
        return $this->userTwo;
    }
}
