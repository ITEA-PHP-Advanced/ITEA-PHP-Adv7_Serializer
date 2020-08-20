<?php

declare(strict_types=1);

namespace Greeflas\Serializer;

class Factory
{
    public function createJsonSerializer(): JsonSerializer
    {
        return new JsonSerializer();
    }

    public function createYamlSerializer(): YamlSerializer
    {
        return new YamlSerializer();
    }

    public function createXmlSerializer(?string $rootNodeName = null): XmlSerializer
    {
        return new XmlSerializer($rootNodeName ?? 'root');
    }
}
