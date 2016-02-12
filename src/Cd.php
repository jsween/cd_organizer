<?php
class Cd
{
    /****Properties****/
    private $artist;
    /****Constructor****/
    function __construct($artist, $album_name, $year, $cover_art)
    {
        $this->artist = $artist;
        $this->album_name = $album_name;
        $this->year = $year;
        $this->cover_art = $cover_art;
    }
    /****Setters****/
    function setArtist($new_artist)
    {
        $this->artist = (string) $new_artist;
    }

    function setAlbumName($album_name)
    {
        $this->album_name = $album_name;
    }

    function setYear($year)
    {
        $this->year = $year;
    }

    function setCoverArt($cover_art)
    {
        $this->cover_art = $cover_art;
    }
    /****Getters****/
    function getArtist()
    {
        return $this->artist;
    }

    function getAlbumName()
    {
        return $this->album_name;
    }

    function getYear()
    {
        return $this->year;
    }

    function getCoverArt()
    {
        return $this->cover_art;
    }
    /****Functions****/
    //save all
    function save()
    {
        array_push($_SESSION['list_of_cds'], $this);
    }
    //get all cds
    static function getAll()
    {
        return $_SESSION['list_of_cds'];
    }
    //delete all cds
    static function deleteAll()
    {
        $_SESSION['list_of_cds'] = array();
    }
}
 ?>
