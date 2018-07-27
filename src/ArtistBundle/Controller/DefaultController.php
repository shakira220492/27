<?php

namespace ArtistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Artist/Default/index.html.twig');
    }
    
    public function getArtistInformationAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            $idUser = 1;

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($idUser);

            $dataminingList = new \HomeBundle\Entity\Datamininglist;
            $dataminingList->setUser($user);

            $em->persist($dataminingList);
            $em->flush();

            $users2 = array();
            $users2[0] = array(
                'variable' => "funciona"
            );

            return new Response(json_encode($users2), 200, array('Content-Type' => 'application/json'));
        }
    }
    
    public function getArtistListAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            $idUser = 1;

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($idUser);

            $dataminingList = new \HomeBundle\Entity\Datamininglist;
            $dataminingList->setUser($user);

            $em->persist($dataminingList);
            $em->flush();

            $users2 = array();
            $users2[0] = array(
                'variable' => "funciona"
            );

            return new Response(json_encode($users2), 200, array('Content-Type' => 'application/json'));
        }
    }
}