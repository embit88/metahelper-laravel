<?php

namespace Embit88\MetaHelper\Services;

class MetaHelper
{
    private string|null $title;
    private string|null $description;
    private string|null $keyword;

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    public function setMeta(string $title, string $description, string $keyword = null): void
    {
        $this->title = $title;
        $this->description = $description;
        $this->keyword = $keyword ?? null;
    }

    public function getTitle(): string|null
    {
        return $this->title ?? env('APP_NAME') ?? null;
    }

    public function getDescription(): string|null
    {
        return $this->description ?? env('APP_NAME') ?? null;
    }

    public function getKeyword(): string|null
    {
        return $this->keyword ?? env('APP_NAME') ?? null;
    }

    public function getMeta(string $key): string|null
    {
        return $this->{$key} ?? env('APP_NAME') ?? null;
    }

}
