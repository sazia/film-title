<
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
           <fieldset>
          <form method= "POST">
              <h3>shop details<h3>
                      
           shop Code : <input type ="text" name ="codeText"><br/>
           
         id : <input type ="text" name ="nameText">
           
            <input type="submit" value ="create" name = 'save'>
        </form>
            </fieldset>
        
        <?php
     require "departmentinfo.php";
      session_start();
     if(isset($_GET['create']))
     $_shop= new departmentinfo();
     $_shop->shop_code=$_GET['codeText'];
     $_shop->name=$_GET['nameText'];
    
    // $_session['department']=$department;
   echo  $_shop->get_code(). ' '. $_shop->get_name();
          echo 'shop created';
        ?>
    </body>
</html>
