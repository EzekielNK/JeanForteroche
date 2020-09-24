<?php


namespace App\Model;

use DateTime;

class Post
{

    private $id;

    private $user_id;

    private $title;

    private $slug;

    private $ft_image;

    private $content;

    private $published;

    private $created_at;

    private $categories = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @return string|null
     */
    public function getFtImage(): ?string
    {
        return $this->ft_image;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return new DateTime($this->created_at);
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
}
