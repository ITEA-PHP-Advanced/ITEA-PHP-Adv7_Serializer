Serializer
==========

[![Serializer](https://img.shields.io/badge/PHP%20Advanced-ITEA-red.svg)](#serializer)

This is simple library for objects serialization to needed format.

Usage
-----

1) Implement `Greeflas\Serializer\Serializable` interface in object

```php
use Greeflas\Serializer\Serializable;

class Person implements Serializable
{
    public function serialize()
    {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'age' => $this->age,
        ];
    }
}
```

2) Create serializer instance and serialize object

```php
...

$factory = new \Greeflas\Serializer\Factory();
$serializer = $factory->createJsonSerializer();

$serializer->serialize($object);
```

Tests
-----

You can run tests with following command

```bash
$ ./tests/run
```
