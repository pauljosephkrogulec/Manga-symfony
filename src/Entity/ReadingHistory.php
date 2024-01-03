<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "reading_history")]
class ReadingHistory
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

    #[ORM\Column(type: "integer")]
    private int $lastChapterRead;

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

    public function getLastChapterRead(): int
    {
        return $this->lastChapterRead;
    }

    public function setLastChapterRead(int $lastChapterRead): void
    {
        $this->lastChapterRead = $lastChapterRead;
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
