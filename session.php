<?php
session_start();
 echo "time:- ".$_SERVER['REQUEEST_TIME'];
 $_SESSION['time'] = $_SERVER['REQUEEST_TIME'];
 header("Location:testsession.php");
 ?>