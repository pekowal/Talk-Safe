<?php

namespace TalkSafeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Message
{

    /**
     * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="messages")
     * @ORM\JoinColumn(name="conversation_id", referencedColumnName="id")
     *
     */

    private $conversation;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="messages")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     */

    private $senderUser;

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
     * @ORM\Column(name="text", type="text")
     */
    private $text;


    /**
     * @var integer
     *
     * @ORM\Column(name="sender_id", type="integer")
     */
    private $senderId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opened", type="datetime")
     */
    private $opened;


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
     * Set text
     *
     * @param string $text
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set reciverId
     *
     * @param integer $reciverId
     * @return Message
     */
    public function setReciverId($reciverId)
    {
        $this->reciverId = $reciverId;

        return $this;
    }

    /**
     * Get reciverId
     *
     * @return integer 
     */
    public function getReciverId()
    {
        return $this->reciverId;
    }

    /**
     * Set senderId
     *
     * @param integer $senderId
     * @return Message
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get senderId
     *
     * @return integer 
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set opened
     *
     * @param \DateTime $opened
     * @return Message
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * Get opened
     *
     * @return \DateTime 
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * Set reciverUser
     *
     * @param \TalkSafeBundle\Entity\User $reciverUser
     * @return Message
     */
    public function setReciverUser(\TalkSafeBundle\Entity\User $reciverUser = null)
    {
        $this->reciverUser = $reciverUser;

        return $this;
    }

    /**
     * Get reciverUser
     *
     * @return \TalkSafeBundle\Entity\User 
     */
    public function getReciverUser()
    {
        return $this->reciverUser;
    }

    /**
     * Set senderUser
     *
     * @param \TalkSafeBundle\Entity\User $senderUser
     * @return Message
     */
    public function setSenderUser(\TalkSafeBundle\Entity\User $senderUser = null)
    {
        $this->senderUser = $senderUser;

        return $this;
    }

    /**
     * Get senderUser
     *
     * @return \TalkSafeBundle\Entity\User 
     */
    public function getSenderUser()
    {
        return $this->senderUser;
    }
}
