
<?php
if(isset($_GET['id']))
{
//
}
else
{
	echo "FUCK YOU";
}


$pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('select * from templateinfo where temp_name=:id' );
$stmt->execute(array(':id'=>$_GET['id']));   
     while($res=$stmt->fetch(PDO::FETCH_ASSOC))
     {

    $temp_name=htmlentities($res['temp_name']);
     }
     ?>
     <style>
     iframe
{
	position: relative;
	left:0;
	margin:0;
	width: 40%;
	height:100%;
}
     </style>
    <iframe name='myiframe' id='myiframe' src='saved templates/<?php echo htmlentities($temp_name) ?>.pdf'> </iframe>