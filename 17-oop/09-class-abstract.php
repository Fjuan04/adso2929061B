<?php 
$title = '09- Class abstract';
$description = "Class Abstract: A class that cannot be instantiated, only extended from.";
include 'template/header.php';

abstract class Database{
    protected $user = 'root';
    protected $dsn = 'mysql:host=localhost;dbname=pokeadso';
    protected $password = '';
    protected $table = 'pokemons';
    // public function __construct()
    // {
    //     $this->connect();
    // }

    public function connect(){
        try{
            return new PDO($this->dsn,$this->user, $this->password);
        }catch(PDOException $e ){
            echo $e->getMessage();
        }
    }

}

class Conection extends Database{
    
    public function select(){
        $sql = "SELECT id, name, type  FROM $this->table";
        if($this->connect()){
            $conx = $this->connect();
            $stmt = $conx->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
    }
}


$conx = new Conection();

$conx->select();
echo "<table class='w-full'>
    <thead class='border-b'>
        <th>ID</th>
        <th>NAME</th>
        <th>TYPE</th>
    </thead>
";

foreach($conx->select() as $pokemon){
   echo "<tr class='border-t hover:bg-[#4083] odd:bg-[#0002]'> 
            <td class='p-1 text-lg'>{$pokemon['id']}</td>
            <td class='p-1 text-lg'>{$pokemon['name']}</td>
            <td class='p-1 text-lg'>{$pokemon['type']}</td>
        </tr>"; 
}

echo "</table>";






include 'template/footer.php';