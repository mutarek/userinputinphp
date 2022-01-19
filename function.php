<?php
class Calculation{
   public function Addition($a,$b)
   {
       echo "Addition of $a & $b Is = ".($a+$b)."<br>";
   }
   public function Subtraction($x,$y)
   {
       echo "Subtraction of $x & $y Is  = ".($x-$y)."<br>";
   }
   public function Multiplication($x,$y)
   {
       echo "Multiplication of $x & $y Is  = ".($x*$y)."<br>";
   }
   public function Division($x,$y)
   {
       echo "Division of $x & $y Is  = ".($x/$y)."<br>";
   }
   public function Modulus($x,$y)
   {
       echo "Modulus of $x & $y Is  = ".($x%$y)."<br>";
   }
   public function Exponentiation($x,$y)
   {
       echo "Exponentiation of $x & $y Is  = ".($x**$y)."<br>";
   }
   
}

?>