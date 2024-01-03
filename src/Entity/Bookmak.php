<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "bookmark")]
class Bookmark
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "id", nullable: false)]
    private User $user;

    #[ORM\ManyToOne(targetEntity: Manga::class)]
    #[ORM\JoinColumn(name: "manga_id", referencedColumnName: "id", nullable: false)]
    private Manga $manga;

    #[ORM\ManyToOne(targetEntity: Chapter::class)]
    #[ORM\JoinColumn(name: "chapter_id", referencedColumnName: "id", nullable: false)]
    private Chapter $chapter;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $timestamp;

    // Getters and setters...

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getManga(): Manga
    {
        return $this->manga;
    }

    public function setManga(Manga $manga): void
    {
        $this->manga = $manga;
    }

    public function getChapter(): Chapter
    {
        return $this->chapter;
    }

    public function setChapter(Chapter $chapter): void
    {
        $this->chapter = $chapter;
    }

    public function getTimestamp(): \DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): void
    {
        $this->timestamp = $timestamp;
    }
}
