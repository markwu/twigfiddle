<?php

namespace Fuz\AppBundle\Service;

use Psr\Log\LoggerInterface;

class RunFiddle
{

    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(Fiddle $fiddle)
    {

    }

}