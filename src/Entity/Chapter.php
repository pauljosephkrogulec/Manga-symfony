<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "chapter")]
class Chapter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\ManyToOne(targetEntity: Manga::class)]
    #[ORM\JoinColumn(name: "manga_id", referencedColumnName: "id", nullable: false)]
    private Manga $manga;

    #[ORM\Column(type: "integer")]
    private int $chapterNumber;

    #[ORM\Column(type: "string", length: 255)]
    private string $title;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $releaseDate;

    #[ORM\Column(type: "string", length: 255)]
    private string $content;

    // Getters and setters...

    public function getId(): int
    {
        return $this->id;
    }

    public function getManga(): Manga
    {
        return $this->manga;
    }

    public function setManga(Manga $manga): void
    {
        $this->manga = $manga;
    }

    public function getChapterNumber(): int
    {
        return $this->chapterNumber;
    }

    public function setChapterNumber(int $chapterNumber): void
    {
        $this->chapterNumber = $chapterNumber;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getReleaseDate(): \DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
