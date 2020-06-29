<?php 
include "newconfig.php";

?>
<html>

<head>
    
<title>Student Login Form</title>
	  <link rel="stylesheet" type="text/css" href="css styles/styles.css">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
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
          header("Location:../data/hello.php");
      }else{
        echo '<script>alert("invalid username or password")</script>';
      }
    }
   else
   {
    echo '<script>alert("please enter credentials")</script>';
   }
    }
 

?>


  


</head>

<body>


<section class="wave">
   <div class="logo">
   <img src="images/logo-1.png" alt="rait">
  <input type="submit" class="home" value="HOME" id="home"/>

    </div>
    <div class="logincontent">
      
      <div class="loginheading">
          <h1>Login</h1>
        </div>

        <form action='' method='post'>
           
    <input type="text" name="username" placeholder="Username / Email" id="username" size="15" />

      <input type="password" name="password" placeholder="Password" id="password" size="15" />
        <div class="loginremember">
            <input type="checkbox" id="chbRemember" name="chbRemember" /><label class="check"
                for="chbRemember"><h3>Remember me next time</h3></label>
            <input name='submit' type="submit" class="loginbtn" value='submit' id="btnSubmit" />
        </form> 
         
        </div>
        <div class="pic-board">

        </div>

    </div>
    </section>

</body>


</html>