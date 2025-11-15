<?php 
$title = 'High Cohesion, low coupling';
$description = 'COCO Exercise';
include 'template/header.php';






// 1. Ataque (interfaz = bajo acoplamiento)

interface Attack {
    public function execute(): string;
}


// 2. Ataques concretos (alta cohesión)

class Fireball implements Attack {
    public function execute(): string {
        return "Lanza una bola de fuego";
    }
}

class SwordSlash implements Attack {
    public function execute(): string {
        return "Da un espadazo poderoso";
    }
}


// 3. Personaje (depende de una abstracción, no de una clase concreta)

class Fighter {
    private string $name;
    private Attack $attack;
    
    public function __construct(string $name, Attack $attack) {
        $this->name = $name;
        $this->attack = $attack;
    }
    
    public function performAttack(): void {
        echo $this->name . ": " . $this->attack->execute() . "<br>";
    }
}


// 4. Uso del sistema

$mario = new Fighter("Mario", new Fireball());
$link = new Fighter("Link", new SwordSlash());

// Ejecutar ataques
$mario->performAttack();  
$link->performAttack();  
?>
<img src="images/mario-fireball.png" alt="">
<img src="images/link-sword.png" alt="">
<?php
include 'template/footer.php';