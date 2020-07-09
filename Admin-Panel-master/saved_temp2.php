<?php
$pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('select * from templateinfo' );
$stmt->execute();   
$name = "Student Name";
while($res = $stmt->fetch(PDO::FETCH_ASSOC))
{
ob_start();
$title=$res['title'];
$subtitle=$res['subtitle'];
$EventDetails1=$res['content'];
$TicordX=$res['titleX'];
$TcordY=$res['titley'];
$imgX=$res['imageX'];
$imgY=$res['imageY'];
$STcordX=$res['subtitleX'];
$STcordY=$res['subtitleY'];
$CcordY=$res['contentY'];
$CcordX=$res['contentX'];
$bgimg=$res['backimage'];
$img=$res['image'];
$titcol=$res['titleColor'];
$subticol=$res['subColor'];
$concol=$res['cColor'];
$imagePosition=$res['floatv'];
$basic = 'This is to certify that Mr./Ms.';

}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body{
    background-image: url(<?php echo htmlentities($bgimg); ?> );
    background-size: cover;
    background-image-resize:6;
}
div#title {
   
    position: absolute;
    width:80%;
    height:100%;
    font-size:1.9em;
    left:<?php if($TicordX != 0)
    { echo htmlentities( $TicordX);
    }
    ?>;
    top:<?php if($TcordY != 0)
    { echo htmlentities( $TcordY);
    }
    ?>;

    color:<?php echo htmlentities($titcol); ?>;
    
}


div#subtitle {
    text-align: center;
    width:50%;
    height:100%;
    font-size:1.8em;
    position: absolute;
    left:<?php if($STcordX != 0)
    { echo htmlentities( $STcordX);
    }
    ?>;
    top:<?php
    if($STcordY != 0)
    { echo htmlentities( $STcordY);
    }
    ?>;
    color:<?php echo htmlentities($subticol);?>;
    font-family:cursive;
}
div#event1 {
    text-align: justify;
    width:85%;
    height:100%;
    font-size:1.2em;
    position: absolute;
    left:<?php
    if($CcordX != 0)
    { echo htmlentities( $CcordX);
    }
    ?>;
    top:<?php
    if($CcordY != 0)
    { echo htmlentities( $CcordY);
    }
    ?>;
   
    color:<?php echo htmlentities($concol);?>;
    
}
div#boh{
    width: 28%;
    position:absolute;
    left:<?php if( strlen($imgX)>0 )
    { echo htmlentities($imgX);
    }
    ?>;
    top:<?php
    if($imgY !=0 )
    { echo htmlentities( $imgY);
    }
    ?>;
} 


</style>
</head>
<body>

   <div id = "title">
        <p><?php
        echo $title ?>
         </p>
    </div>
      <div id = "subtitle">
        <p> <?php echo $subtitle ?> </p>
    </div>
    
    <div id = "event1">
        <pre> <?php echo $basic." "."<b>".$name."</b>"." ".$EventDetails1 ?>  </pre>
        
    </div>
    <div id="boh">
<img src=<?php echo htmlentities($img); ?>>

</div>

</body>
</html>
<?php
include('mpdf/vendor/autoload.php');
$mpdf=new \Mpdf\mPDF();
try{
$b=ob_get_contents();
$mpdf->writeHTML($b);
ob_clean();
//$mpdf->output();
}
catch( \Mpdf\MpdfException $e)
{
    echo $e->getMessage();
}