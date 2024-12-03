<?php

namespace Siddiqar\PostmanGenerator\Authentication;

class Bearer extends AuthenticationMethod
{
    public function prefix(): string
    {
        return 'Bearer';
    }
}
