<?php

namespace Greeflas\Serializer;

class XmlSerializer extends AbstractSerializer
{
    private $rootNode;

    public function __construct($rootNodeName = 'root')
    {
        $this->rootNode = \sprintf('<%s/>', $rootNodeName);
    }

    protected function encode($data)
    {
        $xml = new \SimpleXMLElement($this->rootNode);

        $this->arrayToXmlRecursive($data, $xml);

        return $xml->asXML();
    }

    private function arrayToXmlRecursive($array, \SimpleXMLElement &$node)
    {
        foreach ($array as $key => $value) {
            if (\is_array($value)) {
                $parentNode = $node->addChild($key);
                $this->arrayToXmlRecursive($value, $parentNode);
            } else {
                $node->addChild($key, $value);
            }
        }
    }
}
