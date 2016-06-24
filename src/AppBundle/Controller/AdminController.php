<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_dashboard")
     */
    public function indexAction(Request $request)
    {
        $tables = array(
            array('idx' => 'category', 'label' => 'Category'),
            array('idx' => 'movie', 'label' => 'Movie')
        );
        return $this->render('AppBundle:Admin:index.html.twig', array(
            'tables' => $tables
        ));
    }
}
