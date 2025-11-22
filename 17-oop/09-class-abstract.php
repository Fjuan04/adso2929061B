<?php 
$title = '09- Class abstract';
$description = "Class Abstract: A class that cannot be instantiated, only extended from.";
include 'template/header.php';

class Database{
    protected $user;
    protected $dsn;
    protected $password;
    public function __construct($user, $dsn, $password)
    {
        $this->user = $user;
        $this->dsn = $dsn;
        $this->password = $password;
    }

    public function connect(){
        try{
            return new PDO($this->dsn,$this->user, $this->password);
        }catch(PDOException $e ){
            echo $e->getMessage();
        }
    }

    
}

$sql = new Database("mysql:host=localhost;dbname=pokeadso", 'root', '');
if($sql->connect()){
    echo 'hola';
}



include 'template/footer.php';