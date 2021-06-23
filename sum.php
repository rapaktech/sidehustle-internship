<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Function</title>
</head>
<body>
    
<?php
    function sumArray($array){
        $count = 0;
        $sum = 0;
        while ($count < count($array)) {
            $sum = $sum + $array[$count];
            $count++;
        }
        echo $sum;
    }

    $array = array(1, 2, 3, 4);

    sumArray($array);

?>
</body>
</html>