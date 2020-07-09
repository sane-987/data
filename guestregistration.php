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
        if(empty($guestusername))
        array_push($error,'username is required');
        if(empty($guestemail))
        array_push($error,'email is required');
        if(empty($guestpassword1) || empty($guestpassword2))
        array_push($error,'password is required');
        if($guestpassword1!=$guestpassword2)
        array_push($error,'password does not match!!');
        $sql_query='select * from guest where guestusername=$guestusername or guestemail=$guestemail';
        $result = mysqli_query($con, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
            if ($user['guestusername'] === $guestusername) {
              array_push($error, "Username already exists");
            }
        
            if ($user['guestemail'] === $guestemail) {
              array_push($error, "email already exists");
            }
          }
          
           if (count($error) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
      
            $query = "INSERT INTO guest (guestusername, guestemail, guestpassword) 
                      VALUES('$guestusername', '$guestemail', '$guestpassword')";
            mysqli_query($con, $query);
            $_SESSION['guestusername'] = $guestusername;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../data/helloguest.php');
           
        }
        if(count($error)!=0)
        {
          echo '<script>alert($error)</script>';
        }
    }
    ?>
</head>
<body>
    <b>login</b>
    <form action="" method=''>
        Input username:<input type='text' placeholder='enter username'/></br>
        Input password:<input type='password' placeholder='enter password'/><br>
    </form>
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