<?php

namespace Greeflas\Serializer;

use Greeflas\Serializer\Exception\InvalidFormatException;

abstract class AbstractSerializer implements SerializerInterface
{
    abstract protected function encode($data);

    final public function serialize(Serializable $object)
    {
        $data = $object->serialize();

        $this->validate($data);

        return $this->encode($data);
    }

    private function validate($data)
    {
        if (!\is_array($data)) {
            throw new InvalidFormatException('serialize() method should return array');
        }
    }
}
