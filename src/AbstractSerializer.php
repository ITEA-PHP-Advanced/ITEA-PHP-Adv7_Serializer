<?php

namespace Greeflas\Serializer;

use Greeflas\Serializer\Exception\InvalidFormatException;

/**
 * Basic class for serializers that provider validation of given data to serialize.
 *
 * @author Volodymyr Kupriienko <vladimir.kuprienko@itea.ua>
 * @since 1.0.0
 */
abstract class AbstractSerializer implements SerializerInterface
{
    /**
     * Encodes given array to serialization format.
     *
     * @param array $data
     *
     * @return string
     */
    abstract protected function encode($data);

    /**
     * {@inheritdoc}
     */
    final public function serialize(Serializable $object)
    {
        $data = $object->serialize();

        $this->validate($data);

        return $this->encode($data);
    }

    /**
     * @param array $data
     * @throws InvalidFormatException If given data is not array.
     */
    private function validate($data)
    {
        if (!\is_array($data)) {
            throw new InvalidFormatException('serialize() method should return array');
        }
    }
}
