<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "manga")]
class Manga
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $title;

    #[ORM\Column(type: "string", length: 255)]
    private string $author;

    #[ORM\Column(type: "string", length: 255)]
    private string $genre;

    #[ORM\Column(type: "text")]
    private string $description;

    #[ORM\Column(type: "string", length: 255)]
    private string $coverImage;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $releaseDate;

    #[ORM\Column(type: "float")]
    private float $averageRating;

    #[ORM\Column(type: "integer")]
    private int $totalReviews;

    // Getters and setters...

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCoverImage(): string
    {
        return $this->coverImage;
    }

    public function setCoverImage(string $coverImage): void
    {
        $this->coverImage = $coverImage;
    }

    public function getReleaseDate(): \DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getAverageRating(): float
    {
        return $this->averageRating;
    }

    public function setAverageRating(float $averageRating): void
    {
        $this->averageRating = $averageRating;
    }

    public function getTotalReviews(): int
    {
        return $this->totalReviews;
    }

    public function setTotalReviews(int $totalReviews): void
    {
        $this->totalReviews = $totalReviews;
    }
}
