<?php
class calc_model{
    private $db;
    private $operations;
    private $conexion;
    private $number1;
    private $number2;
    private $operator;
    private $result;
 
    public function __construct()
    {
        $this->conexion=new PDO('mysql:host=localhost;dbname=calculator', "root", "@gobiernoit2015");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->operations=array();
    }

    public function get_number1()
    {
        return $this->number1;
    }

    public function set_number1($number1)
    {
        $this->number1=$number1;
    }

    public function get_number2()
    {
        return $this->number2;
    }

    public function set_number2($number2)
    {
        $this->number2=$number2;
    }
    
    public function get_operator()
    {
        return $this->operator;
    }

    public function set_operator($operator)
    {
        $this->operator=$operator;
    }

    public function get_result()
    {
        return $this->result;
    }

    public function set_result($result)
    {
        $this->result=$result;
    }

    public function get_operations()
    {
        $consulta= $this->conexion->prepare("select * from operations order by id DESC LIMIT 5;");
        $consulta->execute();
        $result2 = $consulta->setFetchMode(PDO::FETCH_ASSOC); 

        foreach($consulta->fetchAll() as $k=>$v) { 
             $this->operations[]=$v;
        }         
         return $this->operations;         
    }

    public function set_operations()
    {
        $sentencia = $this->conexion->prepare("INSERT INTO operations (number1, number2, operator, result) values (:n1, :n2, :ope, :result)");
        $sentencia->bindParam(':n1', $this->number1);
        $sentencia->bindParam(':n2', $this->number2);
        $sentencia->bindParam(':ope', $this->operator);
        $sentencia->bindParam(':result', $this->result);
 
        $sentencia->execute();
    }
}
?>
