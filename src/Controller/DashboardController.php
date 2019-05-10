<?php

namespace App\Controller;

use App\Entity\Data;
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ControllerRepository;
use Symfony\Component\HttpFoundation\Request;


class DashboardController extends AbstractController
{
	/**
     * @Route("/Values", name="Values")
     */
    public function Values(Request $request)
    {
        $limit=$request->request->get('limit');
        $controller = $this->getDoctrine()->getRepository(Data::class)
                                                ->createQueryBuilder('d')
                                                ->select('d')
                                                ->orderBy('d.id','DESC')
                                                ->setMaxResults($limit)
                                                ->getQuery()
                                                ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
        
        return new JsonResponse($controller);
    }

    /**
     * @Route("/", name="dashboard")
     */
    public function index()
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

}
