<?php
session_start();
if(session_destroy()) 
{
header("Location: http://localhost/Travelx/index.php");
}
?>