<?php
class Calc {
 
    private $value1;
    private $value2;
 
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
        echo $this->getvalue1() . " + " . $this->getvalue2() . " = ";
        echo $total = $this->getvalue1() + $this->getvalue2();
    }
 
    public function subtract() {
        echo $this->getvalue1() . " - " . $this->getvalue2() . " = ";
        echo $total = $this->getvalue1() - $this->getvalue2();
    }
 
    public function multiply() {
        echo $this->getvalue1() . " x " . $this->getvalue2() . " = ";
        echo $total = $this->getvalue1() * $this->getvalue2();
    }
 
    public function divide() {
        if ($this->getvalue2() == 0) {
            echo 'You can\'t divided by zero';
        } else {
            echo $this->getvalue1() . " / " . $this->getvalue2() . " = ";
            echo $total = $this->getvalue1() / $this->getvalue2();
        }
    }
}


$calc = new Calc();
$calc->setvalue1(4);
$calc->setvalue2(2);

$calc->Sum();
echo '<br>';
$calc->subtract();
echo '<br>';
$calc->multiply();
echo '<br>';
$calc->divide();

?>