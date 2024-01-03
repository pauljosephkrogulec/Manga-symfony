<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "genre")]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $genreName;

    // Getters and setters...

    public function getId(): int
    {
        return $this->id;
    }

    public function getGenreName(): string
    {
        return $this->genreName;
    }

    public function setGenreName(string $genreName): void
    {
        $this->genreName = $genreName;
    }
}
