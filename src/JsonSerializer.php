<?php

declare(strict_types=1);

namespace Greeflas\Serializer;

class JsonSerializer implements SerializerInterface
{
    public function serialize(Serializable $object): string
    {
        return \json_encode($object->serialize(), \JSON_THROW_ON_ERROR);
    }
}
