<?php
/**
 * Created by PhpStorm.
 * User: a.obasa
 * Date: 31.08.18
 * Time: 01:14
 */

namespace App\Security;


use App\Service\Greeting;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class VeryBadDesign implements ContainerAwareInterface
{

    /**
     * This would not work when public == false in services.yml
     * @required
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
//        $container->get('app.greeting');
    }
}