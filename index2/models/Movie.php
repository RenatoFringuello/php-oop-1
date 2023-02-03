<?php

class Movie{
    protected $title;
    protected $subtitle;
    protected $overview;
    protected $categories = [];
    protected $posterPath;
    protected static $baseUri = 'https://image.tmdb.org/t/p/w342';
    protected static $count = 0;

    /**
     * this constructor create a instance of a movie
     *
     * @param string $_title
     * @param Array $_categories
     * @param string $_duration
     * @param string $_subtitle
     */
    public function __construct($_title, $_categories, $_posterPath , $_subtitle = '', $_overview = '')
    {
        $this->title = $_title;
        $this->subtitle = $_subtitle;
        $this->overview = $_overview;
        $this->categories = $_categories;
        $this->posterPath = $_posterPath;
        self::$count ++;
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
     * call this function to get the overview of the movie
     *
     * @return string the overview of the movie
     */
    public function getOverview(){
        return ($this->overview !== '') ? $this->overview : 'not available';
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
        return ($str == ', ')? 'not available' : $str;
    }

    /**
     * call this function to get the img path of the movie
     *
     * @return string the img path of the movie
     */
    public function getImgPath(){
        return self::$baseUri.$this->posterPath;
    }

    /**
     * call this function to get the count of the movies
     *
     * @return string the count of the movies
     */
    public static function getCount(){
        return self::$count;
    }
}