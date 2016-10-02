<?php

namespace TalkSafeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



class MessageController extends Controller
{

    /**
     * @Route("/send")
     * @Template()
     */
    public function sendAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/messages")
     * @Template()
     */
    public function messagesAction()
    {
        
        return array(
                
            );    }

}
