<?php
// https://symfonycasts.com/screencast/symfony-bundle/routes-controllers

namespace NickYeoman\symfoncmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    public function __construct(){
        // nothing here
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function index() {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'BundleController',
        ]);
    }
}
