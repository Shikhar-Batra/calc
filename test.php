<?php
namespace Calculator;

class Calculator{

 public function calc(){

      if (isset($_POST['submit']))

      {
          $num1=$_POST['num1'];
          $num2=$_POST['num2'];
          $operator=$_POST['operations'];
          switch ($operator) {
              case "ADD":
                  echo ($num1 + $num2);
                  break;
              case "SUB":
                  echo ($num1 - $num2);
                  break;
              case "MUL":
                  echo  ($num1 * $num2);
                  break;
              case "DIV":
                  echo  ($num1 % $num2);
                  break;
              default:
                  echo "error";
          }
      }

  }

}




//
//$calculat = new Calculator();
//echo $calculat->calc();
?>




