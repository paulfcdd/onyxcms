<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends Controller
{
    /**
     * @return Response
     * @Route("/", name="app.index")
     */
    public function indexAction() {
        return new Response('kek');
    }
}