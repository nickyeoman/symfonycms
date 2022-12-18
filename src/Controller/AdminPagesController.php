<?php

namespace NickYeoman\SymfonyCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminPagesController extends AbstractController
{

    public function __construct()
    {
        //
    }
    
    #[Route('/admin/pages', name: 'admin_pages')]
    public function index() {


        return $this->render('@SymfonyCMS/adminpages.html.twig', [
            'controller_name' => 'BundleController',
            'pages' => [],
        ]);

        
    }
}
