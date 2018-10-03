<?php

namespace Greeflas\Serializer;

interface SerializerInterface
{
    public function serialize(Serializable $object);
}
