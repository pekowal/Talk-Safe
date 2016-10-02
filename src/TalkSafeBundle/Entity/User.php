<?php

namespace TalkSafeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\ManyToMany(targetEntity="Conversation", mappedBy="user")
     * @ORM\JoinTable(name="user_conversation")
     */
    private $conversation;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="senderUser")
     */
    private $messages;

    /**
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="friend")
     * @ORM\JoinTable(name="user_friend")
     */

    private $user;

    /**
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="user")
     */
    private $friend;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function getUsername()
    {
        return parent::getUsername();
    }

    public function __construct()
    {
        parent::__construct();
        //$this->persons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add messages
     *
     * @param \TalkSafeBundle\Entity\Message $messages
     * @return User
     */
    public function addMessage(\TalkSafeBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;

        return $this;
    }

    /**
     * Remove messages
     *
     * @param \TalkSafeBundle\Entity\Message $messages
     */
    public function removeMessage(\TalkSafeBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Add friends
     *
     * @param \TalkSafeBundle\Entity\Friends $friends
     * @return User
     */
    public function addFriend(\TalkSafeBundle\Entity\Friends $friends)
    {
        $this->friends[] = $friends;

        return $this;
    }

    /**
     * Remove friends
     *
     * @param \TalkSafeBundle\Entity\Friends $friends
     */
    public function removeFriend(\TalkSafeBundle\Entity\Friends $friends)
    {
        $this->friends->removeElement($friends);
    }

    /**
     * Get friends
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFriends()
    {
        return $this->friends;
    }
}
