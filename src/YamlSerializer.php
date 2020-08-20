<?php

declare(strict_types=1);

namespace Greeflas\Serializer;

use Symfony\Component\Yaml\Yaml;

class YamlSerializer implements SerializerInterface
{
    public function serialize(Serializable $object): string
    {
        return Yaml::dump($object->serialize());
    }
}
