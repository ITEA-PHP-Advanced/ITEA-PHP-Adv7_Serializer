<?php

namespace Greeflas\Serializer\Tests\Fixtures;

use Greeflas\Serializer\Serializable;

class Sample implements Serializable
{
    private $firstField;
    private $secondField;

    public function __construct($firstField, $secondField)
    {
        $this->firstField = $firstField;
        $this->secondField = $secondField;
    }

    public function serialize()
    {
        return [
            'first' => $this->firstField,
            'second' => $this->secondField,
        ];
    }
}
