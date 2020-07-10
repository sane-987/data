<?php
include "newconfig.php";
?>
<html>

<head>

<?php

    if(isset($_POST['guestlogin'])){
        session_start();
        $guestusername=mysqli_real_escape_string($con,$_POST['guestusername']);
        $guestpassword=mysqli_real_escape_string($con,$_POST['guestpassword']);
        
        
        if($guestusername!='' && $guestpassword!='')
        {
           $guest_query="select count(*) as cntguest from guest where guestusername='".$guestusername."'and guestpassword='".$guestpassword."'";
           $result=mysqli_query($con,$guest_query);
           $row=mysqli_fetch_array($result);

           $count=$row['cntguest'];
           if($count>0)
           {
               $_SESSION['guestusername']=$guestusername;
               echo'guest has logged in';
               header('location:../data/helloguest.php');
           }
           else
           {
            echo '<script>alert("invalid username or password")</script>';
           }
        }
        else
        {
         echo '<script>alert("please input username and password")</script>';
         }
    }
    

?>

</head>

<body>
    
<b>login</b>
    <form action='' method='post'>
        Input username:<input name='guestusername' type='text' placeholder='enter username'/></br>
        Input password:<input name='guestpassword' type='password' placeholder='enter password'/><br>
        <input name='guestlogin' type='submit' value='login'/>
    </form>
    <b>Register</b>
    <a target='_blank' href="../data/guestregistration.php">signup page</a>


</body>

</html>