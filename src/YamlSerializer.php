<?php

namespace Greeflas\Serializer;

use Symfony\Component\Yaml\Yaml;

class YamlSerializer extends AbstractSerializer
{
    public function encode($data)
    {
        return Yaml::dump($data);
    }
}
