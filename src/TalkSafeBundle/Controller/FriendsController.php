<?php

namespace TalkSafeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TalkSafeBundle\Entity\Friends;
use TalkSafeBundle\Entity\User;

class FriendsController extends Controller
{
    /**
     * @Route("/show")
     * @Template()
     */

    public function showAction(){
        $loggedUser = $this->container->get('security.context')->getToken()->getUser();

        $repoFriends = $this->getDoctrine()->getRepository("TalkSafeBundle:Friends");
        $repoUsers = $this->getDoctrine()->getRepository("TalkSafeBundle:User");

        $friendsOne = $repoFriends->findBy(
            array('userOne' => $loggedUser->getId())
        );
        //$friendsOne->setUserTwo($repoUsers->find($friendsOne->getUserTwo()->getId()));

        //$idUser = $friendsOne[0]->getUserTwo()->getId();
        $friendsOfLoggedUser = [];


        foreach ($friendsOne as $friend){
            $user = $repoUsers->find($friend->getUserTwo()->getId());

            $friendsOfLoggedUser[] = $user;

        }
        

        /*
        $friendsOfLoggedUser[] = $repoUsers->find(2);
        $friendsOfLoggedUser[] = $repoUsers->find(3);
        $friendsOfLoggedUser[] = $repoUsers->find(1);
        */
        /*
        foreach ($friendsTwo as $friend){
            $friendsOfLoggedUser[] = $repoUsers->find($friend->getUserOne());

        }
        */

        /*
        $friendsOfLoggedUser[] = $repoUsers->find(3);
        $friendsOfLoggedUser[] = $repoUsers->find(2);
        $friendsOfLoggedUser[] = $repoUsers->find(1);
        */

        return array('friends' => $friendsOfLoggedUser);
    }

    /**
     * @Route("/add")
     * @Template()
     */
    public function addAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/delete")
     * @Template()
     */
    public function deleteAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/search")
     * @Template()
     */
    public function searchAction(){
        
    }

}
