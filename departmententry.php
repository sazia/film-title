<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <form method= "POST">
              Department Code : <input type ="text" name ="codeText"><br/>
            Name : <input type ="text" name ="nameText"><br/>
            <input type="submit" value ="Save" name = 'save'>
        </form>
        <?php
     require "department.php";
     session_start();
     if(isset($_POST['save']))
     $_department= new department();
     $_department->code=$_POST['codeText'];
     $_department->name=$_POST['nameText'];
     $_session['department']=$department;
     echo 'department created';
             
        
        ?>
    </body>
</html>