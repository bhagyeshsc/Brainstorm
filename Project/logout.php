<?php

include('da.inc');
 session_start();
 session_unset(); 
unset($_SESSION['user']);
session_destroy();
header('Location:index.php');
 ?>

