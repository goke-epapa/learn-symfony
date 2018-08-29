<?php
/**
 * Created by PhpStorm.
 * User: a.obasa
 * Date: 29.08.18
 * Time: 23:40
 */

namespace App\Service;


use Psr\Log\LoggerInterface;

class Greeting
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function greet(string $name)
    {
        $this->logger->info("Greeted $name");
        return "Hello $name";
    }
}