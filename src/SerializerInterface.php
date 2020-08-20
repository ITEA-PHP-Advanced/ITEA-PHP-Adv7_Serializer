<?php

namespace Greeflas\Serializer;

/**
 * This is interface of serializer service
 * that can serialize objects to different formats.
 *
 * @author Volodymyr Kupriienko <vladimir.kuprienko@itea.ua>
 * @since 1.0.0
 */
interface SerializerInterface
{
    /**
     * Serializes given object end returns result.
     *
     * @param Serializable $object Object to serialize.
     * @return string
     */
    public function serialize(Serializable $object);
}
