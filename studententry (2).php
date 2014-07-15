

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method ="POST">
            Student Reg no : <input type ="text" name ="regNoText"><br/>
            Name : <input type ="text" name ="nameText"><br/>
            Email : <input type ="text" name ="emailText"><br/>
            <input type="submit" value ="Save" name='save'>
        </form>
        <?php
       require_once 'student.php';
            require_once 'department.php';
            session_start();
           if(isset($_POST['save']))
     $_student= new student();
     $_student->regno=$_POST['regNoText'];
     $_student->name=$_POST['nameText'];
      $_student->email=$_POST['emailText'];
    
     $department = $_SESSION['department'];
     echo $department->add_student($student);
     $_SESSION['department']= $department;
        ?>
    </body>
</html>
