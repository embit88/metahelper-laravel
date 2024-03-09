<?php

namespace Embit88\SeoHelper\Services;

class SeoHelper
{
    private string|null $title;
    private string|null $description;
    private string|null $keyword;
    private string|null $robots = 'index, follow';
    private array|null $breadcrumbs = [];
    private array|null $social_meta = [];
    private array|null $links = [];
    private string|null $seo_text;

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

    public function setBreadcrumb(string $title, string|null $href = null) :void
    {
        $this->breadcrumbs[] = [
            'title' => $title,
            'href' => $href,
        ];
    }

    public function getBreadcrumb(): array|null
    {
        return $this->breadcrumbs ?? null;
    }

    public function setSeoText(string $seo_text): void
    {
        $this->seo_text = $seo_text;
    }

    public function getSeoText(string $replace = ''): string|null
    {
        return isset($this->seo_text) ? str_replace("<~%s~>", $replace, $this->seo_text) : null;
    }

    public function setSocialMeta(string $type = 'website', string $image = null): void
    {
        try {
            if(!empty($image) && exif_imagetype($image)) {
                $size = getimagesize($image);
            }
        } catch (\Exception $e) {
            $image = null;
        }

        $this->social_meta = [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'url' => request()->fullUrl(),
            'type' => $type,
            'image' => $image ?? null,
            'width' => $size[0] ?? '500',
            'height' => $size[1] ?? '500',
            'site_name' => env('APP_NAME'),
        ];
    }

    public function getSocialMeta(): string
    {
        $tag = '';
        try {
            // OpenGraph
            $tag .= "<meta property='og:title' content='{$this->social_meta['title']}'> \n";
            $tag .= "<meta property='og:description' content='{$this->social_meta['description']}'> \n";
            $tag .= "<meta property='og:url' content='{$this->social_meta['url']}'> \n";
            $tag .= "<meta property='og:type' content='{$this->social_meta['type']}'> \n";
            if(!empty($this->social_meta['image'])) {
                $tag .= "<meta property='og:image' content='{$this->social_meta['image']}'> \n";
                $tag .= "<meta property='og:image:width' content='{$this->social_meta['width']}'> \n";
                $tag .= "<meta property='og:image:height' content='{$this->social_meta['height']}'> \n";
            }
            $tag .= "<meta property='og:site_name' content='{$this->social_meta['site_name']}'> \n";

            // Twitter
            $tag .= "<meta property='twitter:title' content='{$this->social_meta['title']}'> \n";
            $tag .= "<meta property='twitter:description' content='{$this->social_meta['description']}'> \n";
            $tag .= "<meta property='twitter:url' content='{$this->social_meta['url']}'> \n";
            if(!empty($this->social_meta['image'])) {
                $tag .= "<meta property='twitter:image' content='{$this->social_meta['image']}'> \n";
                $tag .= "<meta property='twitter:image:alt' content='{$this->social_meta['site_name']}'> \n";
            }

        } catch (\Exception $e) {
            $tag = '';
        }

        return $tag;
    }

    public function setLinkLang(string $href, string $hreflang): void
    {
        $this->links[] = [
            'href' => $href,
            'hreflang' => $hreflang,
        ];
    }

    public function getLinkLang(): string
    {
        $tag = '';
        if(count($this->links) > 0) {
            foreach ($this->links as $link) {
                $tag .= "<link href='{$link['href']}' rel='alternate' hreflang='{$link['hreflang']}'> \n";
            }
        }
        return $tag;
    }

    public function setRobots(string $robots): void
    {
        $this->robots = $robots;
    }

    public function getRobots(): string
    {
        return $this->robots;
    }

}
