<?php
session_start();
if(session_destroy())
{
    header("Location:../data/newlogin.php");
}
?>