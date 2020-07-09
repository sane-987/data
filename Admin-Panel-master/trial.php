
<?php
$pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('select * from templateinfo' );
$stmt->execute();	
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
$STicordX=$res['subtitleX'];
$STcordY=$res['subtitleY'];
$CcordY=$res['contentY'];
$CcordX=$res['contentX'];
$bgimg=$res['backgimage'];
$img=$res['image'];
$titcol=$res['titleColor'];
$subticol=$res['subColor'];
$concol=$res['cColor'];
$float=$res['floatv'];
$basic = 'This is to certify that Mr./Mrs.';
}
?>
<html>
<head>
<style>

body{
    background-image: url(<?php echo htmlentities($bgimg);?>);
  
    background-image-resize:4;
}
div#title{
    position: absolute;
    left:<?php 
    echo htmlentities($TicordX);
    ?>;
    top:<?php 
    echo htmlentities($TcordY);
    ?>;
    color:<?php
    	echo htmlentities($titcol);
    	?> ;
	width:90%;
	height:100%;
	font-size:2.4em;
    
	
}

div#subtitle {
    width:40%;
	height:100%;
	font-size:1.6em;
	position: absolute;
    left:<?php echo htmlentities($STicordX)?>;
    top:<?php echo htmlentities($STcordY)?>;
	color:<?php echo htmlentities($subticol)?>;
	font-family:cursive;
}
div#event1 {
    width:90%;
	height:100%;
	font-size:1.4em;
    position: absolute;
    left:<?php echo htmlentities($CcordX)?>;
    top:<?php echo htmlentities($CcordY)?>;
   
	color:<?php echo htmlentities($concol)?>;
	
}
div#boh{
	width: 28%;
	position:absolute;
	left:<?php echo htmlentities($imgX)?>;
	top:<?php echo htmlentities($imgY)?>;
} 
</style>
</head>
<body>
	<div>
   <div id = "title">
        <p><?php
        echo htmlentities($title); ?>
         </p>
    </div>
	  <div id = "subtitle">
        <p> <?php echo  htmlentities($subtitle); ?> </p>
    </div>
	
    <div id = "event1">
        <p> <?php echo htmlentities("$basic"."$EventDetails1"); ?>  </p>
    </div>
	<div id="boh">
<img src=<?php echo htmlentities($img); ?>>
</div>
</div>

</body>
</html>
<?php
require_once('tcpdf_min/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$b=ob_get_contents();
$pdf->writeHTML($b, true, 0, true, 0);
ob_clean();
$pdf->Output('example_001.pdf', 'I');
?>