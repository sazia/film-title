
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       require_once 'department.php';
            require_once 'student.php';  
            session_start();
            $department = $_SESSION['department'];
            echo $department->get_code(). '<br/>';
            echo $department->get_name(). '<br/>';
            echo $department->get_no_of_students(). '<br/>';
            echo 'Name Email Regno'. '<br/>';
            foreach ($department->get_all_students() as $a_student) {
                echo $a_student->get_name(). ' '. $a_student->get_email(). ' '. $a_student->get_reg_no(). '<br/>';
            }
        ?>
    </body>
</html>
