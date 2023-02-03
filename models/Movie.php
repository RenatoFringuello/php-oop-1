<?php

class Movie{
    protected $title;
    protected $subtitle;
    protected $categories = [];
    protected $duration;

    /**
     * this constructor create a instance of a movie
     *
     * @param string $_title
     * @param Array $_categories
     * @param string $_duration
     * @param string $_subtitle
     */
    public function __construct($_title, $_categories, $_duration , $_subtitle = '')
    {
        $this->title = $_title;
        $this->subtitle = $_subtitle;
        $this->categories = $_categories;
        $this->duration = $_duration;
    }

    /**
     * call this function to get the title of the movie
     *
     * @return string the title of the movie
     */
    public function getTitle(){
        return $this->title;
    }

    /**
     * call this function to get the subtitle of the movie
     *
     * @return string the subtitle of the movie
     */
    public function getSubtitle(){
        return $this->subtitle;
    }

    /**
     * call this function to get the categories of the movie
     *
     * @return Array the categories of the movie
     */
    public function getCategories(){
        return $this->categories;
    }

    /**
     * call this function to get the categories of the movie in a string divided by text.
     * Note the divider will not be added at the end of the string
     *
     * @param string $dividerString the string to separate each category with
     * @return string the categories of the movie in a string divided by text
     */
    public function getCategoriesToString($dividerString){
        $str = '';
        foreach ($this->categories as $key => $category) {
            $str .= ($key < count($this->categories)-1) ? $category . $dividerString : $category;
        }
        return $str;
    }

    /**
     * call this function to get the duration of the movie
     *
     * @return string the duration of the movie
     */
    public function getDuration(){
        return $this->duration;
    }
}