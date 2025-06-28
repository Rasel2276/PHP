<?php
class calculation{
    public $a,$b,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$cal_1 = new calculation();
$cal_1->a = 10;
$cal_1->b = 20;

$cal_2 = new calculation();
$cal_2->a = 25;
$cal_2->b = 10;

echo "sum value of cal_1 : " .$cal_1->sum() . "<br>";
echo "sub value of cal_2 : " .$cal_2->sub();
?>