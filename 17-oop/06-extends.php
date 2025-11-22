<?php 
$title = '06- Extends';
$description = 'Extends: Keyword for a class to inherit properties and methods from another.';
include 'template/header.php';

class Operation {
    protected $num1;
    protected $num2;


    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;

    }
}

class Addition extends Operation{
    public function showResult()
    {
        $result = $this->num1 + $this->num2;

        return "
            <ul class='border p-5 m-5'>
                <li>{$this->num1} + {$this->num2} = $result</li>
            </ul>
        ";
    }
}

class Substraction extends Operation{
    public function showResult()
    {
        $result = $this->num1 - $this->num2;

        return "
            <ul class='border p-5 m-5'>
                <li>{$this->num1} - {$this->num2} = $result</li>
            </ul>
            
        ";
    }
}

class Multiplication extends Operation{
    public function showResult()
    {
        $result = $this->num1 * $this->num2;

        return "
            <ul class='border p-5 m-5'>
                <li>{$this->num1} * {$this->num2} = $result</li>
            </ul>
            
        ";
    }
}

class Division extends Operation{
    public function showResult()
    {
        $result = $this->num1 / $this->num2;

        return "
            <ul class='border p-5 m-5'>
                <li>{$this->num1} / {$this->num2} = $result</li>
            </ul>
            
        ";
    }
}

class Pow extends Operation{
    public function showResult()
    {
        $result = $this->num1 ** $this->num2;

        return "
            <ul class='border p-5 m-5'>
                <li>{$this->num1} ** {$this->num2} = $result</li>
            </ul>
            
        ";
    }
}

$op1 = new Addition(128,256);
echo $op1->showResult();

$op2 = new Substraction(512, 256);
echo $op2->showResult();


$op3 = new Multiplication(2, 10);
echo $op3->showResult();

$op2 = new Division(512, 4);
echo $op2->showResult();

$op2 = new Pow(5, 5);
echo $op2->showResult();


include 'template/footer.php';