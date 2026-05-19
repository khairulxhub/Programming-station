<?php
trait Calculate{
    public function add($num1, $num2){
        return $num1 + $num2;
    }
    public function sub($num1, $num2){
        return $num1 - $num2;
    }
    public function mul($num1, $num2){
        return $num1 * $num2;
    }
    public function div($num1, $num2){
        return $num1 / $num2;
    }
}
trait Operation{
    public function power($a, $b){
        return $a ** $b;
    }
    public function mod($a, $b){
        return $a % $b;
    }

}
class Result{
    use Calculate, Operation;

    public $num1;
    public $num2;

}
$result = new Result();
echo $result->add(10, 20) . "<br>";
echo $result->sub(10, 20) . "<br>";
echo $result->mul(10, 20) . "<br>";
echo $result->div(10, 20) . "<br>";
echo $result->power(10, 20) . "<br>";
echo $result->mod(10, 20) . "<br>";



?>