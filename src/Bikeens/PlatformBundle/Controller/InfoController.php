<?php

// src/Bikeens/PlatformBundle/Controller/AdvertController.php

namespace Bikeens\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class InfoController extends Controller
{
    public function indexAction()
    {
        return $this->render('BikeensPlatformBundle:Info:index.html.twig');
    }
}