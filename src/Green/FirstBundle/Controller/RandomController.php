<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 11/15/14
 * Time: 6:00 PM
 */

namespace Green\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        $number = rand(1, $limit);

        return $this->render(
            'GreenFirstBundle:Random:index.html.twig',
            array(
                'number' => $number
            )
        );
    }
} 