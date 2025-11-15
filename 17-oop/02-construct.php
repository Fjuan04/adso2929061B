<?php 
$title = '02 - Constructor';
$description = 'Constructor';
include 'template/header.php';

class PlayList {
    #Attributes
    public $artist;
    public $album;
    public $year;
    public $song;

    #Constructor method

    public function __construct($artist, $album, $year, $song = 'Happy Birthday') {
        $this->artist = $artist;
        $this->artist = $album;
        $this->artist = $year;
        $this->artist = $song;
    }


}

$pl = new PlayList('Juanes', 'La camisa negra',1998, 'La tierra');

include 'template/footer.php';