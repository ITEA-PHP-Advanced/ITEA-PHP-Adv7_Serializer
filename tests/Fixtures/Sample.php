<?php

declare(strict_types=1);

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

    public function serialize(): array
    {
        return [
            'first' => $this->firstField,
            'second' => $this->secondField,
        ];
    }
}
