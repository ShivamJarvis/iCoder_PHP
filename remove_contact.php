<?php
require "partials/_dbconnect.php";
$id = $_GET['id'];
// echo $id;
$sql = "DELETE FROM `Contact` WHERE `Contact`.`Sno` = '$id';";
$result = mysqli_query($conn,$sql);

if($result)
{
    header("location: show_contacts.php");
    exit;
}
?>