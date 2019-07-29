<?php
header("Access-Control-Allow-Origin: *");

$data = [];
$current_line= 0;
$amount_of_lines = htmlspecialchars($_GET["amount_of_lines"]);
while ($current_line <= $amount_of_lines)
{
    $randomNumber = rand ( 0 , 30 );
    $array = [$current_line, $randomNumber];
    $current_line ++; 
    array_push($data, $array);
}
$myJSON = json_encode($data);
echo $myJSON;
?>

