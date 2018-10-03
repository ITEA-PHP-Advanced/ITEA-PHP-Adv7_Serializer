<?php

namespace Greeflas\Serializer;

class JsonSerializer extends AbstractSerializer
{
    protected function encode($data)
    {
        return \json_encode($data, \JSON_THROW_ON_ERROR);
    }
}
