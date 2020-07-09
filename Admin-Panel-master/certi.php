<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>RAIT E-Certificate Generator</title>
    <style >
      .images
      {
        position:absolute;
        left:20%;
        outline-style: ridge;
        outline-width: 3px;
        top: 41%;
        margin-bottom: 30px;
}
.con {
  position: absolute;
   top: 33%;
   left: 20%;
   text-align: left;
   margin-left: 56px;
   font-size: 20px;
}
      .images:hover
      {
         transform: scale(1.1); 
      }
      .color1{
  text-shadow: 2px 2px 4px maroon, 2px 2px 4px white;
}
.color2{
  text-shadow: 1px 1px 2px blue, 2px 2px 4px white;
}

    </style>
  </head>
  <body>
    
    <?php include 'includes/dashboard.html' ?>
    
  
 </a></div>
 <center>
  <div class="space" style="margin-left: 20%;">
    
      <br><br><br>
      <h2 class="color1"><strong>Automized Certificate Generator</strong></h2>
      <br><br><br>
    <br>
    <form method="post" action="er.php">
    <p class="con color2"><strong>CSI TEMPLATE</strong></p>
   <input class="images" type="image" name="stro"  src="temp.jpg" alt="Csi template" style="width:20%">
     </form>



      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
