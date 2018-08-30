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
    /**
     * @var string
     */
    private $message;

    public function __construct(LoggerInterface $logger, string $message)
    {
        $this->logger = $logger;
        $this->message = $message;
    }

    public function greet(string $name)
    {
        $this->logger->info("{$this->message} $name");
        return "{$this->message} $name";
    }
}