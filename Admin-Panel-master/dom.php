<style>
	div#one
	{
		width:50%;
	}
</style>
<div id="one">
 <li><?php
include('mpdf/vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();
$pagecount = $mpdf->SetSourceFile('test.pdf');
$tplId = $mpdf->ImportPage($pagecount);
$mpdf->UseTemplate($tplId);
$mpdf->WriteHTML('Hello World');
$mpdf->Output();
?></li>
</div>