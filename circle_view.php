<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action= 'circle_view.php' method="POST">
           Radius of circle <input type = 'text' name = 'radius'><br/>
            
            <input type = 'submit' value='area' name = 'areabutton'><br/>
        </form>   

<?php
require_once('circle_area.php');
if(isset($_POST['areabutton']))
{
    $a_circle = new circle_area();
    $a_circle->radius =$_POST['radius'];
     echo  $a_circle-> get_area () ;
}

?>
</body>
</html>