
<?php
// Array representing a possible record set returned from a database
$records = array(
    array(
        'id' => 123,
        'first_name' => 'sazia',
        'last_name' => 'afreen',
    ),
    array(
        'id' => 456,
        'first_name' => 'aksha',
        'last_name' => 'farhin',
    )
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);
?>
