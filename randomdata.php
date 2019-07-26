<?php
header("Access-Control-Allow-Origin: *");
$data = [];
$amount_of_lines = 0;
while ($amount_of_lines <= 10)
{
    $randomNumber = rand ( 0 , 30 );
    $array = [$amount_of_lines, $randomNumber];
    $amount_of_lines ++; 
    array_push($data, $array);
}
$myJSON = json_encode($data);
echo $myJSON;
?>
