<?php
include "newconfig.php";
?>
<html>
<head>
    <?php
    if(isset($_POST['submit-register']))
    {
        session_start();
        $guestusername=mysqli_real_escape_string($con,$_POST['guestusername']);
        $guestemail=mysqli_real_escape_string($con,$_POST['guestemail']);
        $guestpassword1=mysqli_real_escape_string($con,$_POST['guestpassword1']);
        $guestpassword2=mysqli_real_escape_string($con,$_POST['guestpassword2']);
        $errors=array();
        if (empty($guestusername)) {echo '<script>alert("enter username")</script>';exit(); }
        if (empty($guestemail)) { echo '<script>alert("enter email")</script>';exit(); }
        if (empty($guestpassword1)) { echo '<script>alert("enter password")</script>';exit(); }
        if ($guestpassword1 != $guestpassword2) {
          echo '<script>alert("password does not match")</script>';

          exit(); 
        }
        $user_check_query = "SELECT * FROM guest WHERE guestusername='".$guestusername."' OR guestemail='".$guestemail."' LIMIT 1";
        $result = mysqli_query($con, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          if ($user['guestusername'] === $guestusername) {
            echo '<script>alert("username already exists")</script>';
            exit();
          }
      
          if ($user['guestemail'] === $guestemail) {
            echo '<script>alert("email id already exists")</script>';
            exit();
          }
        }
        if (count($errors) == 0) {
          $password = md5($guestpassword1);//encrypt the password before saving in the database
      
          $query = "INSERT INTO guest (guestusername, guestemail, guestpassword) 
                VALUES('$guestusername', '$guestemail', '$guestpassword1')";
          mysqli_query($con, $query);
          $_SESSION['username'] = $guestusername;
          $_SESSION['success'] = "You are now logged in";
          echo '<script>alert("you are succesfully registered")</script>';
        } 

    }
    ?>
</head>
<body>
    
    <b>Register</b>
    <form action='' method='post'>
    Input Name:<input name='guestusername' type='text' placeholder='enter name' /></br>
    Input email:<input name='guestemail' type='text' placeholder='enter email'/><br>
    Input password:<input type='password'name='guestpassword1' placeholder='enter password'/></br>
    Re-enter password:<input type='password'name='guestpassword2' placeholder='reenter password'/></br>
    <input type="submit" name='submit-register' value='submit-register'/>
    </form>
</body>
</html>