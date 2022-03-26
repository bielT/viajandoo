<?php
require __DIR__.'/vendor/autoload.php';

use src\Entity\Flight;
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header("location: index.php?status=error");
  exit;
}

$arrayName = Flight::getHourByAirport(filter_input(INPUT_GET, 'id',
                              FILTER_SANITIZE_ENCODED));
//  array(
// "12"    =>  "1",
// "234"   =>  "2",
// "23423" =>  "2",
// "000"   =>  "3",
// "1"     =>  "4"
// );

echo json_encode($arrayName);
?>
