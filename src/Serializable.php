<?php

declare(strict_types=1);

namespace Greeflas\Serializer;

interface Serializable
{
    public function serialize(): array;
}
