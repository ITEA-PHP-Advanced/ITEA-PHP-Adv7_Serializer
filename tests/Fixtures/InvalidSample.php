<?php

namespace Greeflas\Serializer\Tests\Fixtures;

use Greeflas\Serializer\Serializable;

final class InvalidSample implements Serializable
{
    public function serialize()
    {
        return 'not an array';
    }
}
