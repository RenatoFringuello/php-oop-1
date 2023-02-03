<?php

class Movie{
    protected $title;
    protected $subtitle;
    protected $category;
    protected $duration;

    public function __construct($_title, $_category, $_duration , $_subtitle = '')
    {
        $this->title = $_title;
        $this->subtitle = $_subtitle;
        $this->category = $_category;
        $this->duration = $_duration;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getSubtitle(){
        return $this->subtitle;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getDuration(){
        return $this->duration;
    }
}