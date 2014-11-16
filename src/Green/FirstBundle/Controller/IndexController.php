<?php

namespace Green\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'GreenFirstBundle:Index:index.html.twig'
        );
    }

    public function helloAction($firstName, $lastName)
    {
        return $this->render(
            'GreenFirstBundle:Index:hello.html.twig',
            array(
                'firstName' => $firstName,
                'lastName' => $lastName
            )
        );
    }

    public function blogAction()
    {
        $data = array();

        for($i = 0; $i < 15; $i++)
        {
            $data[$i] = 'Record № ' . $i;
        }

        return $this->render(
            'GreenFirstBundle:Index:blog.html.twig',
            array(
                'data' => $data
            )
        );
    }

    public function showAction($id, $rec = null)
    {
        return $this->render(
            'GreenFirstBundle:Index:show.html.twig',
            array(
                'id' => $id,
                'rec' => $rec
            )
        );
    }
} 