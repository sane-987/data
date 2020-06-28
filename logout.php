<?php
session_start();
if(session_destroy())
{
    header("Location:../sane project/newlogin.php");
}
?>