<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Range Array Function</title>
</head>
<body>
    
<?php

function rangeArray($start, $end){
    $array = array();
    $count = 0;
    while ($start <= $end) {
        $array[$count] = $start;
        $start++;
        $count++;
    }
    print_r($array);
}

rangeArray(0, 10);

?>

</body>
</html>