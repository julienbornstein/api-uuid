<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Ramsey\Uuid\UuidInterface;

/**
 * @ApiResource(
 *     collectionOperations={},
 *     itemOperations={
 *         "get"={
 *             "requirements"={
 *                 "id"="[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}"
 *             },
 *         },
 *     },
 * )
 */
class Foo
{
    private UuidInterface $id;
    private string $name;

    public function __construct(UuidInterface $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
