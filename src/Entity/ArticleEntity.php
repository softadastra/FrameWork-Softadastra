<?php

namespace App\Entity;

class ArticleEntity
{
    private int $id;
    private string $title;
    private string $content;

    public function __construct(int $id = 0, string $title = '', string $content = '')
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
