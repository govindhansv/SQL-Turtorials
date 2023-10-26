<?php
if (isset($_GET['number'])) {
    $number = intval($_GET['number']);
    $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
    
    // Generate the multiplication table
    $table = '';
    for ($i = 1; $i <= $limit; $i++) {
        $result = $number * $i;
        $table .= "$number x $i = $result<br>";
    }

    // Return the table as a response
    echo $table;
} else {
    echo "Please provide a number parameter.";
}
?>
