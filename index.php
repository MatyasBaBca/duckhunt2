<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .dead {
    transform: rotate(180deg);
}

    html {
    cursor: crosshair;
}
</style>
<script>

function kill(id) {
//alert("Auvajs! Kvák! řekla: " + id);
var duck = document.getElementById(id);
duck.classList.add('dead');
}

</script>

</style>
</head>
<body>
<?php

//drawDuck($size, $left, $top, "#FF0000");
for ($c=0; $c<20; $c++) {
    $size = rand(20, 150);
    $left = rand(0, 95);
    $top = rand(0, 95);
    drawDuck($size, $left, $top, rand_color(), $c);
}
?>

</body>
</html>