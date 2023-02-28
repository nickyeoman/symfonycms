<?php
namespace NickYeoman\SymfonyCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    public function __construct()
    {
        //
    }
    
    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function index() {
        return $this->render('@SymfonyCMS/dashboard.html.twig', [
            'controller_name' => 'BundleController',
        ]);
    }
}
