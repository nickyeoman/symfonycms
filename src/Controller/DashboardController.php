<?php
// https://symfonycasts.com/screencast/symfony-bundle/routes-controllers

namespace NickYeoman\SymfonyCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    public function __construct()
    {
        //
    }
    
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index() {
        return $this->render('@SymfonyCMS/dashboard.html.twig', [
            'controller_name' => 'BundleController',
        ]);
    }
}
