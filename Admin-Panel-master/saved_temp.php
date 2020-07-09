
<html>
<style>
div#images
{
    position: absolute;
    left:10%;
    width:10%;
    margin-bottom: 30px;
}
a{
width:100%;
height:100%;
}

</style>
<body>
     <?php include 'includes/dashboard.html';
     $pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('select * from templateinfo' );
$stmt->execute();   
     ?>
          
  
 </a></div>
 <center>
  <div class="space" style="margin-left: 20%;">
    
    <br><br>
    <br>
    <form method="post" action="er.php">
<div class="images">
<?php
 
while($res = $stmt->fetch(PDO::FETCH_ASSOC))
{   
    $temp_name=htmlentities($res['temp_name']);
   echo"<style>
  .joke{
   position:relative;
   margin-bottom:30px;
   margin-left:30px;
   display:flex;
   width:30%; 
   height:60%;
  float:left;
  padding-bottom:50px;
  justify-content: space-around;
  }

  .joke a{
   position: relative;
   color:maroon;
   font-size:23px;
   top:108%;
   right:240%;
  }

  .joke a:hover{
    text-decoration:none;
  }


    </style>

   <div class='joke'><iframe name='myiframe' id='myiframe' src='saved templates/$temp_name.pdf'></iframe><br><br><p>
    <a href='temp_out.php?id=$temp_name'><strong>SELECT</a></strong></p></div>";
}
 ?>
 
</div>
 </form>
</body>
</html>
