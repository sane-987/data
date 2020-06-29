<?php
include "newconfig.php";
?>
<html lang="en" dir="ltr">
  <head>
    <title>Admin Login Form</title>
    <link rel="stylesheet" type="text/css" href="css styles/stylea.css">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    
    <?php

    if(isset($_POST['submitadmin'])){
        session_start();
        $adminuname=mysqli_real_escape_string($con,$_POST['adminuser']);
        $adminpassword=mysqli_real_escape_string($con,$_POST['adminpassword']);

            if($adminuname!='' && $adminpassword!='')
                {
                    $sql_query2="select count(*) as cntuser2 from admin where adminusername='".$adminuname."'and adminpassword='".$adminpassword."'";
                    $result2=mysqli_query($con,$sql_query2);
                    $row2=mysqli_fetch_array($result2);

                    $count2=$row2['cntuser2'];

                    if($count2>0)
                        {
                    $_SESSION['adminuname']=$adminuname;
                    echo'hello admin has logged in';
                    header("Location:../data/hello2admin.php");
                        }
                    else
                    {
                    echo '<script>alert("invalid admin username or password")</script>';
                    }
                }   
    else
    {
        echo '<script>alert("please enter admin username and password")</script>';
    }
}

    ?>

  </head>
  <body>

    <section class="wave">
    <div class="logo">
      <form action="home.html">
      <img src="images\logo-1.png" alt="rait">
      <input type="submit" class="home" value="HOME" id="home"/>
      </form>
    </div>

    <div class="logincontent">
      <div class="loginheading">
          <h1>   Login as Admin User</h1>
        </div>
        <div class="loginremember">
            <form action='' method='post'> 
        <input type="text" name="adminuser" placeholder="User-id/Roll-no" id="username" size="15" value="" class="input">
          <input type="password" name="adminpassword" placeholder="Password" id="password" size="15" value="" class="input">
          <input type="checkbox" id="chbRemember" name="chbRemember" />
          <label class="check" for="chbRemember"><h3>Remember me next time</h3></label>
          <input name='submitadmin' type="submit" class="loginbtn" value="Login" id="btnSubmit" />
           </form>
           
        </div>

        <div class="pic-board">

        </div>

    </div>
    </section>
   
</body>
</html>
