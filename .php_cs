<?php

use Symfony\CS;

$finder = CS\Finder\DefaultFinder::create()->in(__DIR__);

return CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->setUsingCache(true)
    ->finder($finder)
;
