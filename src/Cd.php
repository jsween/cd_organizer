<?php
class Cd
{
    /****Properties****/
    private $artist;
    /****Constructor****/
    function __construct($artist)
    {
        $this->artist = $artist;
    }
    /****Setters****/
    function setArtist($new_artist)
    {
        $this->artist = (string) $new_artist;
    }
    /****Getters****/
    function getArtist()
    {
        return $this->artist;
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
