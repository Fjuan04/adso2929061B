<?php 
$title = '02 - Constructor';
$description = 'Construct: Special method that initializes a new object upon creation.';
include 'template/header.php';

class PlayList {
    #Attributes
    public $name;
    public $artist = array();
    public $year = array();
    public $image = array();
    public $genre = array();

    #Constructor method

    public function __construct($name) {
        $this->name = $name;
    }

    public function setPlayList($artist, $genre, $image, $year){
        $this->artist[] = $artist;
        $this->genre[] = $genre;
        $this->image[] = $image;
        $this->year[] = $year;

    }
    
    public function getPlayList() {
        echo  "<h3>PlayList: $this->name</h3>
                <div style='display: flex; gap: 0.4rem;flex-direction: column'>";
                    foreach($this->genre as $i => $artist){
                        echo "<div style='display: flex; gap: 0.4rem; border: 2px solid #0009; background-color: #0003'>
                        <img src='{$this->image[$i]}' width='160px'> 
                            <div>
                                <h4>Artist: $artist </h4>
                                <h5>Genre: {$this->genre[$i]}</h5>
                                <h5>Year: {$this->year[$i]}</h5>
                            </div>
                        </div>
                        ";
                    }
        echo "</div>";
    }
}

$pl = new PlayList('Merry Christmas');
$pl->setPlayList('Maria Carey', 'Pop-Holiday', 'https://shorturl.at/usv3E', 1994);
$pl->setPlayList('Maria Carey', 'Pop-Holiday', 'https://shorturl.at/usv3E', 1994);
$pl->setPlayList('Maria Carey', 'Pop-Holiday', 'https://shorturl.at/usv3E', 1994);

$pl->getPlayList();
include 'template/footer.php';