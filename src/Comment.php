<?php

namespace Acme;

class Comment
{
    private $title;
    private $description;

    public function __construct()
    {
        $this->title = 'NC';
        $this->description = 'NC';
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function formatTitle()
    {
        $this->title = strtoupper($this->title);

        return $this;
    }

    public function truncateDescription($limit = 10)
    {
        $this->description = substr($this->description, 0, $limit);

        return $this;
    }
}

