<?php

namespace FloatingBits\ExampleEaProblemsBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;
class ExampleEaProblemsBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

}