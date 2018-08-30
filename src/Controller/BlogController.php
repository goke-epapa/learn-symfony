<?php
/**
 * Created by PhpStorm.
 * User: a.obasa
 * Date: 29.08.18
 * Time: 23:43
 */

namespace App\Controller;


use App\Security\VeryBadDesign;
use App\Service\Greeting;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @var Greeting
     */
    private $greeting;
    /**
     * @var VeryBadDesign
     */
    private $veryBadDesign;

    public function __construct(Greeting $greeting, VeryBadDesign $veryBadDesign)
    {
        $this->greeting = $greeting;
        $this->veryBadDesign = $veryBadDesign;
    }

    /**
     * @Route("/", name="blog_index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        return $this->render('base.html.twig', [
            'message' => $this->greeting->greet($request->get('name'))
        ]);
    }
}