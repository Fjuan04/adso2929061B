<?php 
$title = '05- Parameter';
$description = 'Parameters: Values passed into a function to customize its operation.';
include 'template/header.php';

class Country {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
    

}

class fifaWorldCup {
    private $country;
    private $year;
    private $winner;

    #country & year are mandatory
    public function __construct($country, $year, $winner = 'Brazil'){
        $this->country = $country;
        $this->year = $year;
        $this->winner = $winner;
    }

    public function showEvent(){
        echo "<ul class='border p-5'> 
                <li class='flex flex-col'> 
                    <span><b>Country:</b> {$this->country->name} </span> 
                    <span><b>Year:</b>$this->year</span> 
                    <span><b>Winner:</b>$this->winner</span> 
                </li>
              </ul><br>";
    }
}

$country = new Country('Italy');
$worldcup = new fifaWorldCup($country, 1990, 'Germany') ;
$worldcup->showEvent();


$country = new Country('USA');
$worldcup = new fifaWorldCup($country, 1994) ;
$worldcup->showEvent();

$country = new Country('France');
$worldcup = new fifaWorldCup($country, 1998, 'France') ;
$worldcup->showEvent();

$country = new Country('Korea & Japan');
$worldcup = new fifaWorldCup($country, 2002) ;
$worldcup->showEvent();

$country = new Country('Germany');
$worldcup = new fifaWorldCup($country, 2006, 'Italy') ;
$worldcup->showEvent();


include 'template/footer.php';