<?php
/**
 * Created by PhpStorm.
 * User: a.obasa
 * Date: 29.08.18
 * Time: 23:43
 */

namespace App\Controller;


use App\Service\Greeting;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
{
    /**
     * @var Greeting
     */
    private $greeting;
    /**
     * @var \Twig_Environment
     */
    private $twig;

    public function __construct(Greeting $greeting, \Twig_Environment $twig)
    {
        $this->greeting = $greeting;
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="blog_index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index(Request $request)
    {
//        $this->get('app.greeting'); // Would fail if AbstractController is used
//        return $this->render('base.html.twig', [
//            'message' => $this->greeting->greet($request->get('name'))
//        ]);
        return new Response($this->twig->render('base.html.twig', [
            'message' => $this->greeting->greet($request->get('name'))
        ]));
    }
}