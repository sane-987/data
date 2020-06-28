<?php 
include "newconfig.php";

?>
<html>

<head>
<b>Login Page</b>

<?php 
   
    $error_message = "";$success_message = "";

  if(isset($_POST['submit'])){
    session_start();
  $uname = mysqli_real_escape_string($con,$_POST['username']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  
  if ($uname != "" && $password != ""){

      $sql_query = "select count(*) as cntUser from login where username='".$uname."' and passwd='".$password."'";
      $result = mysqli_query($con,$sql_query);
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];

      if($count > 0){
          $_SESSION['uname'] = $uname;
          echo "hello logged in";
          header("Location:../sane project/hello.php");
      }else{
          echo "Invalid username and password";
      }
    }
   else
   {
       echo "please enter credentials";
   }
    }
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
                header("Location:../sane project/hello2admin.php");
            }
            else
            {
                echo "invalid admin details";
            }
        }
    else
    {
        echo "please enter admin credentials";
    }
    }


?>

</head>

<body>


<form action='' method='post'>
Username:
<input name='username' type='text' placeholder='enter username'/><br>
 Password:
<input name='password' type='password' placeholder='enter password'/><br>
<button name='submit' type=value='submit'>submit</button>
</form >

<form method='post' action=''>
Admin username:
<input name='adminuser' type='text' placeholder='enter adminusername'/><br>
Admin password:
<input name='adminpassword' type='password' placeholder='enter adminpassword'/><br>
<button name='submitadmin' type=value='submitadmin'>submit</button>

</form>

</body>


</html>