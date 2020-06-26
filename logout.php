<?php

session_start();
session_reset();
    $_SESSION = array();
    session_destroy();
header("location: index.php")

?>