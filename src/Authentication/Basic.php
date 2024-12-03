<?php

namespace Siddiqar\PostmanGenerator\Authentication;

class Basic extends AuthenticationMethod
{
    public function prefix(): string
    {
        return 'Basic';
    }
}
