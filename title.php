<?php
$films = array (
    "films"  => array("a" => "comedy", "b" => "tragedy", "c" => "action"),
    "film title" => array("big"),"star wars","titanic","frenchkiss"
) ,"stars"   => array("bill murray",  "Mark hammel", "leonard dicaprio","cate blanchett"),
);
Print_r(array_change_key_case($films, case_lower));
?>
