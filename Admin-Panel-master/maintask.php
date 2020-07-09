<?php 
session_start();
if(isset($_POST['title']) && isset($_POST['subtitle']) && isset($_POST['name']) && isset($_POST['EventDetails1']) )
{
$name =  $_POST['name'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$eventdetails1 = $_POST['EventDetails1'];
}
$basic = 'This is to certify that Mr./Mrs.';

ob_start();
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body{
    background-image: url('temp.jpg');
	background-size: cover;
    background-image-resize:6;	
}
div#title {
    position: absolute;
	width:90%;
	height:100%;
	font-size:2.4em;
    left:<?php if(isset($_POST['TicordX']) && strlen($_POST['TicordX'])>0)
	{ echo htmlentities( $_POST['TicordX']);
	}
	else{ 
	echo htmlentities(trim('9%',''));
	} ?>;
    top:<?php if(isset($_POST['TcordY']) && strlen($_POST['TcordY'])>0)
	{ echo htmlentities( $_POST['TcordY']);
	}
	else{ 
	echo htmlentities(trim('20%',''));
	}?>;
    color:<?php echo htmlentities(isset($_POST['Tcolor']) ? $_POST['Tcolor'] : 'black');?>;
	
}

div#subtitle {
    width:40%;
	height:100%;
	font-size:1.6em;
	position: absolute;
    left:<?php if(isset($_POST['STicordX']) && strlen($_POST['STicordX'])>0)
	{ echo htmlentities( $_POST['STicordX']);
	}
	else{ 
	echo htmlentities(trim('9%',''));
	}?>;
    top:<?php
	if(isset($_POST['STcordY']) && strlen($_POST['STcordY'])>0)
	{ echo htmlentities( $_POST['STcordY']);
	}
	else{ 
	echo htmlentities(trim('31%',''));
	}
	?>;
	color:<?php echo htmlentities(isset($_POST['STcolor']) ? $_POST['STcolor'] : 'black');?>;
	font-family:cursive;
}
div#event1 {
    width:90%;
	height:100%;
	font-size:1.4em;
    position: absolute;
    left:<?php
	if(isset($_POST['CcordX']) && strlen($_POST['CcordX'])>0)
	{ echo htmlentities( $_POST['CcordX']);
	}
	else{ 
	echo htmlentities(trim('6%',''));
	}
	?>;
    top:<?php
	if(isset($_POST['CcordY']) && strlen($_POST['CcordY'])>0)
	{ echo htmlentities( $_POST['CcordY']);
	}
	else{ 
	echo htmlentities(trim('48%',''));
	}
	?>;
   
	color:<?php echo htmlentities(isset($_POST['Ccolor']) ? $_POST['Ccolor'] : 'black');?>;
	
}
div#boh{
	width: 28%;
	position:absolute;
	left:<?php if(isset($_POST['imgX']) && strlen($_POST['imgX'])>0 && (strlen($_POST['float']))==0)
	{ echo htmlentities( $_POST['imgX']);
	}
	elseif(isset($_POST['float'])  && (($_POST['float'])==='center') && (strlen($_POST['imgX']))==0 )
	{echo htmlentities(trim('35%',''));	
	}
	elseif(isset($_POST['float'])  && (($_POST['float'])==='left') && (strlen($_POST['imgX']))==0 )
	{echo htmlentities(trim('9%',''));	
	}
	else{ echo htmlentities(trim('55%',''));
	}
	?>;
	top:<?php
	if(isset($_POST['imgY']) && strlen($_POST['imgY'])>0)
	{ echo htmlentities( $_POST['imgY']);
	}
	else{ 
	echo htmlentities(trim('31%',''));
	}
    ?>;
} 



</style>
<body >
   <div id = "title">
        <p> <?php echo $title ?> </p>
    </div>
	  <div id = "subtitle">
        <p> <?php echo $subtitle ?> </p>
    </div>
	
    <div id = "event1">
        <pre> <?php echo $basic."<b>".$name."</b>".$eventdetails1 ?> </pre>
    </div>
	<div id='boh'>
<img src="naruto.jpg">
</div>
</body>
<?php
include('mpdf/vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();
if( isset($_POST['gen'])){
$body=ob_get_contents();
$mpdf->writeHTML($body);
ob_clean();
$ran=md5(rand());
$mpdf->output();
header('Location:certi.php');
}
if( isset($_POST['saved']))
{   //FOR TITLE
	if(isset($_POST['TicordX']) && strlen($_POST['TicordX'])>0)
	{ $titleX=( $_POST['TicordX']);
	}
	else{ 
	$titleX='9%';
	} 

     if(isset($_POST['TcordY']) && strlen($_POST['TcordY'])>0)
	{ $titleY= $_POST['TcordY'];
	}
	else{ 
	$titleY='20%';
	}

	 if(isset($_POST['Tcolor']) && strlen($_POST['Tcolor'])>0) 
	 {
	 $tc= $_POST['Tcolor'] ;
	} else{ 
	$tc="black";
}
//For image
	if(isset($_POST['imgX']) && strlen($_POST['imgX'])>0 && (strlen($_POST['float']))==0)
	{ $imgX=( $_POST['imgX']);
	}
	elseif(isset($_POST['float'])  && (($_POST['float'])==='center') && (strlen($_POST['imgX']))==0 )
	{$imgX='35%';	
	}
	elseif(isset($_POST['float'])  && (($_POST['float'])==='left') && (strlen($_POST['imgX']))==0 )
	{$imgX='9%';	
	}
	else{ $imgX='55%';
	}
	if(isset($_POST['imgY']) && strlen($_POST['imgY'])>0)
	{ $imgY=( $_POST['imgY']);
	}
	else{ 
	$imgY=(trim('31%',''));
	}

	// for content
	if(isset($_POST['CcordX']) && strlen($_POST['CcordX'])>0)
	{ $cx=( $_POST['CcordX']);
	}
	else{ 
	$cx=(trim('6%',''));
	}
	if(isset($_POST['CcordY']) && strlen($_POST['CcordY'])>0)
	{ $cy=( $_POST['CcordY']);
	}
	else{ 
	$cy=(trim('48%',''));
	}
	if(isset($_POST['Ccolor']) && strlen($_POST['cColor'])>0)
	 {
	 $cc= $_POST['Ccolor'] ;
	} 
	else{ 
	$cc="black";
	}

	// for subtitles
	if(isset($_POST['STicordX']) && strlen($_POST['STicordX'])>0)
	{ $scordx=( $_POST['STicordX']);
	}
	else{ 
	$scordx=(trim('9%',''));
	}
	if(isset($_POST['STcordY']) && strlen($_POST['STcordY'])>0)
	{$scordy=( $_POST['STcordY']);
	}
	else{ 
	$scordy=(trim('31%',''));
	}

	if(isset($_POST['STcolor']) && strlen($_POST['STcolor'])>0) 
	 {
	 $sc= $_POST['STcolor'] ;
	} 
	else{ 
	$sc="black";
}
if(isset($_POST['Ncolor']) && strlen($_POST['Ncolor'])>0)
{
$temp_name=$_POST['Ncolor'];
}
else
{
	$temp_name=md5(rand());
}
if(isset($_POST['title']) || isset($_POST['subtitle']) || isset($_POST['name']) || isset($_POST['EventDetails1'])  || isset($_POST['Tcolor'])  || isset($_POST['TicordX'])  || isset($_POST['TcordY']) || isset($_POST['imgY']) || isset($_POST['imgX']) || isset($_POST['float']) || isset($_POST['STcolor']) || isset($_POST['STicordX']) || isset($_POST['STcordY']) || isset($_POST['Ccolor']) || isset($_POST['CcordX']) || isset($_POST['CcordY']))
{


$pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$r='temp.jpg';
$q='naruto.jpg';
$sql=$pdo->prepare("insert into templateinfo(title,subtitle,content,backimage,image ,titleX ,titley,subtitleX ,subtitleY ,imageX ,imageY ,contentX ,contentY,titleColor,subColor,cColor,floatv,temp_name) values(:title,:subtitle,:content,:backgimage,:image ,:titleX ,:titley,:subtitleX ,:subtitleY ,:imageX ,:imageY ,:contentX ,:contentY,:titleColor,:subColor,:cColor,:floatv,:temp_name)");
$sql->execute( 
	array(
	':title'=>$_POST['title'],
	':subtitle'=>$_POST['subtitle'],
	':content'=>$_POST['EventDetails1'],
	':backgimage'=>$r,
	':image'=>$q,
	':titleX'=>$titleX,
	':titley'=>$titleY,
	':subtitleX'=>$scordx,
	':subtitleY'=>$scordy,
	':imageX'=>$imgX,
	':imageY'=>$imgY,
	':contentX'=>$cx,
	':contentY'=>$cy,
	':titleColor'=>$tc,
	':subColor'=>$sc,
	':cColor'=>$cc,
	':floatv'=>$_POST['float'],
	':temp_name'=>$temp_name
));
$body=ob_get_contents();
$mpdf->writeHTML($body);
ob_clean();
$mpdf->output("saved templates/$temp_name.pdf","F");
header('Location:certi.php');
return;
}}

?>