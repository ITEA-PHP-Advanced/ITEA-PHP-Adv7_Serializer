<?php

declare(strict_types=1);

namespace Greeflas\Serializer;

class XmlSerializer implements SerializerInterface
{
    private string $rootNode;

    public function __construct(string $rootNodeName = 'root')
    {
        $this->rootNode = \sprintf('<%s/>', $rootNodeName);
    }

    public function serialize(Serializable $object): string
    {
        $xml = new \SimpleXMLElement($this->rootNode);

        $this->arrayToXmlRecursive($object->serialize(), $xml);

        return $xml->asXML();
    }

    private function arrayToXmlRecursive(array $array, \SimpleXMLElement &$node): void
    {
        foreach ($array as $key => $value) {
            if (\is_array($value)) {
                $parentNode = $node->addChild($key);
                $this->arrayToXmlRecursive($value, $parentNode);
            } else {
                $node->addChild($key, (string) $value);
            }
        }
    }
}
