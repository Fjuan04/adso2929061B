<?php 
$title = '03- Private';
$description = 'Private: Restricts property or method access to only within its class.';
include 'template/header.php';

class RenderTable {
    private $nr; #number of Rows
    private $nc; #number of Columns

    public function __construct($nr, $nc)
    {
        $this->nr = $nr;
        $this->nc = $nc;

        //
        #Access to private methods
        $this->startT();
        $this->bodyT();
        $this->endT();
    }

        private function startT(){
            echo "<h3>Table {$this->nr}x{$this->nc}</h3><table border='1'>";
        }
        private function bodyT(){
            for($r = 1; $r <= $this->nr; $r++ ){
                echo "<tr>";
                for($c =1; $c <= $this->nc;$c++){
                    echo "<td> f{$r}c{$c} </td>";
                }        
                
                echo "</tr>";
            }
        }
        private function endT(){
            echo "</table>";
        }
}

$tb = new RenderTable(5,5);
include 'template/footer.php';