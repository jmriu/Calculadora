<?php
require_once("../models/calcModel.php");
class Calc{
 
    private $value1;
    private $value2;

    public function __construct() 
    {
       $this->value1='1';
       $this->value2='1';
   }
 
    public function getvalue1() 
    {
        return $this->value1;
    }
 
    public function getvalue2() 
    {
        return $this->value2;
    }
 
    public function setvalue1($value1) 
    {
        $this->value1 = $value1;        
    }
 
    public function setvalue2($value2) 
    {
        $this->value2 = $value2;
    }
 
    public function Sum() 
    {
        return $this->getvalue1() + $this->getvalue2();
    }
 
    public function subtract() 
    {
        return $this->getvalue1() - $this->getvalue2();
    }
 
    public function multiply() 
    {
        return $this->getvalue1() * $this->getvalue2();
    }
 
    public function divide() 
    {

        return $this->getvalue1() / $this->getvalue2();
    }
}
$calc = new Calc();

if (isset($_POST['number1'])) 
{
    $num1=$_POST['number1'];
    $calc->setvalue1($num1);
}

if (isset($_POST['number2'])) 
{
    $num2=$_POST['number2'];
    $calc->setvalue2($num2);
}

if (isset($_POST['operator'])) 
{
    $operator=$_POST['operator'];

    switch ($operator) {
        case '-':
            $result=$calc->subtract();
            break;
        case '*':
            $result=$calc->multiply();
            break;
        case '/':
            $result=$calc->divide();
            break;        
        default:
            $result=$calc->Sum();
            break;
    }
    $calcmodel=new calc_model();
    $calcmodel->set_number1($num1);
    $calcmodel->set_number2($num2);
    $calcmodel->set_operator($operator);
    $calcmodel->set_result($result);
    $calcmodel->set_operations();
}

$host= $_SERVER["HTTP_HOST"];
$url= "http://localhost:8080/apps/Calculadora/index.php";

header('Location: '.$url);
