<?php
class Calc{
 
    private $value1;
    public $value2;

    public function __construct() {
       $this->value1='1';
       $this->value2='1';
   }
 
    public function getvalue1() {
        return $this->value1;
    }
 
    public function getvalue2() {
        return $this->value2;
    }
 
    public function setvalue1($value1) {
        $this->value1 = $value1;
    }
 
    public function setvalue2($value2) {
        $this->value2 = $value2;
    }
 
    public function Sum() {
        //echo $this->getvalue1() . " + " . $this->getvalue2() . " = ";
        //echo $total = $this->getvalue1() + $this->getvalue2();
        return $this->getvalue1() + $this->getvalue2();
    }
 
    public function subtract() {
        //echo $this->getvalue1() . " - " . $this->getvalue2() . " = ";
        //echo $total = $this->getvalue1() - $this->getvalue2();
        return $this->getvalue1() - $this->getvalue2();
    }
 
    public function multiply() {
        //echo $this->getvalue1() . " x " . $this->getvalue2() . " = ";
        //echo $total = $this->getvalue1() * $this->getvalue2();
        return $this->getvalue1() * $this->getvalue2();
    }
 
    public function divide() {
        /*if ($this->getvalue2() == 0) {
            echo 'You can\'t divided by zero';
        } else {
            echo $this->getvalue1() . " / " . $this->getvalue2() . " = ";
            echo $total = $this->getvalue1() / $this->getvalue2();
        }*/
        return $this->getvalue1() / $this->getvalue2();
    }
}

$calc = new Calc();

if (isset($_POST['number1'])) {
    $calc->setvalue1($_POST['number1']);
}

if (isset($_POST['number2'])) {
    $calc->setvalue2($_POST['number2']);
}

if (isset($_POST['operation'])) {
    $operation=$_POST['operation'];
    ?>
    <span> <?php echo ''. $_POST['number1']. ' '.$operation.' '.$_POST['number2']. ' = ' ?></span>
    <?php  
    switch ($operation) {
        case '-':
            echo $calc->subtract();
            break;
        case '*':
             echo $calc->multiply();
            break;
        case '/':
             echo $calc->divide();
            break;        
        default:
            echo $calc->Sum();
            break;
    }
}
?>
