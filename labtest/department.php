
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
          <form method= "GET">
              <h3>Create a Shop<h3>
                      
           Department Code : <input type ="text" name ="codeText"><br/>
           
           Name : <input type ="text" name ="nameText">
           
            <input type="submit" value ="create" name = 'save'>
        </form>
            </fieldset>
        <?php
      require "departmentinfo.php";
      session_start();
     if(isset($_GET['create']))
     $_department= new departmentinfo();
     $_department->departmentcode=$_GET['codeText'];
     $_department->name=$_GET['nameText'];
     echo 'code name';
    // $_session['department']=$department;
   echo  $_department->get_code(). ' '. $_department->get_name();
         
       
        ?>
    </body>
</html>