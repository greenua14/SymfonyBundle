<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 11/15/14
 * Time: 11:15 PM
 */

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
} 