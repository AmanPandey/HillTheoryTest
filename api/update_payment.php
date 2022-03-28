<?php

require_once("config.php");


$clientsid = mysqli_real_escape_string($db,$_POST['clientsid']);
$clientName = mysqli_real_escape_string($db,$_POST['clientName']);
$amount = mysqli_real_escape_string($db,$_POST['amount']);
$mode = mysqli_real_escape_string($db,$_POST['mode']);


date_default_timezone_set('Asia/Kolkata');
$entry_date = date( 'd-m-Y');
$entry_time = date( 'h:i a');

$sql = "INSERT INTO payments (client_id, amount, mode, date, time)
VALUES ('$clientsid', '$amount', '$mode', '$entry_date', '$entry_time')";

if (mysqli_query($db, $sql)) {
  echo "New record created successfully";
  header ("Location: view_clients?client=$clientsid");


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
?>