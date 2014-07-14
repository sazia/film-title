<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <form action= 'calculator_view.php' method="POST">
            first no <input type = number' name = 'first_no'><br/>
          second no <input type = number' name = 'second_no'><br/>
                <input type = 'submit' value='add' name = 'addbutton'><br/>
                    <input type = 'submit' value='subtract' name = subtractbutton'><br/>
          <input type = 'submit' value='multiply' name = 'multiplybutton'><br/>
      
          <input type = 'submit' value='divide' name = 'dividebutton'><br/>
        </form>   

<?php
require_once('calculator.php');
if(isset($_POST['add']))
{
    $a_add= new calculator;
    $a_add-> first_no =$_POST['first_no'];
    $a_add-> second_no =$_POST['second_no'];
    
     echo  $a_add-> add_no() ;
}
     if(isset($_POST['subtract']))
   {
   $a_subtract= new calculator;
   $a_subtract-> first_no =$_POST['first_no'];
    $a_subtract-> second_no =$_POST['second_no'];
    
     echo  $a_subtract->subtract_no() ;
}


if(isset($_POST['multiply']))
{
    $a_multiply= new calculator;
    $a_multiply-> first_no =$_POST['first_no'];
     $a_multiply-> second_no =$_POST['second_no'];
    
     echo  $a_multiply-> multiply_no() ;
    if(isset($_POST['divide']))
{
    $a_divide= new calculator;
    $a_divide-> first_no =$_POST['first_no'];
     $a_divide-> second_no =$_POST['second_no'];
    
     echo  $a_divide-> divide_no() ;
     
}
}
?>
</body>
</html>