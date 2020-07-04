<?php 
  class Multiplo {

    public function multiplo3($num1)
    {
       return $num1 % 3;
    }

      public function multiplo5($num1)
      {
          return $num1 % 5;
      }

      public function multiplo3_5($num1)
      {
          $result1 = $num1 % 3;
          $result2 = $num1 % 5;

          $total = $result1 + $result2;

          return $total;
      }


 }

?>