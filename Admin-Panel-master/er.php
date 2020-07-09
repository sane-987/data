<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">

 
<style>

.a
{
position:relative;
width:35%;
height:100%;
background-image:url('temp.jpg');
background-size:100% 100%;
background-repeat:no-repeat;
border: 2px black solid;
left:15%;
margin:0;
}
textarea#tit{
	position:absolute;
	top:25%;
	left:4%;
	width:85%;
	height:7%;
}
textarea#subtit
{
position:absolute;
top:34%;
left:4%;
width:50%;
height:5%;
}
div#editor
{
position:absolute;
border: 2px black solid;
top:1%;
left:50.5%;
width:35%;
height:98%;
}
p#name1 {
	position:absolute;
    font-size: 13px;
	top:40%;
	left:4%;
}
input#name {
	position:absolute;
   width:35%;
   top:42%;
	left:42%;
	margin-left: 15px;
   
}
textarea#eventdetails1
{
	position:absolute;
	width:85%;
	height:27%;
	top:47%;
	left:4%;
}
.btn{
	position:absolute;
	width:85%;
	left:4%;
	top:75%;
}
.btn1{
	position:absolute;
	width:85%;
	left:4%;
	top:79%;
}
.btn2{
	position:absolute;
	width:85%;
	left:4%;
	top:72%;
}
p#ti{
	text-align:center;
	font-size:1em;
}
label#Tsetcolor
{
	position:absolute;	
	left:4%;
}
input#ticolor
{
	position:absolute;	
	left:20%;
	margin-left: 5%;
}
label#Tsetcord
{
	position:absolute;	
	left:4%;

}
input#ticordX
{
	position:absolute;	
	left:35%;
	width:5%;

	
}
input#ticord
{
	position:absolute;	
	left:45%;
	width:5%;
}
input#ticordB
{
	position:absolute;	
	left:38%;
	width:5%;
}
input#ticordU
{
	position:absolute;	
	left:44%;
	width:5%;
}
input#tic
{
	position:absolute;	
	left:26%;
}
@media screen and (max-width: 600px) {
*{
	box-sizing: border-box;
}	

.a
{
margin:0;
width:100%;
left:0;

}

p#name1{
font-size: 10px;

}

div#editor
{
	position:relative;
	left:0;
	width:100%;
	height: 100%;
	display: block;
	border: 2px solid black%;
}
input#ticord
{
	left:65%;
	margin-left: 17%;


}

p#ti{

	font-size: 1em;
}
input#ticordX
{
	left:60%;
	margin-left: 15%;
	cursor: pointer;


}
input#ticolor
{
	left:25%;
	margin-left: 15px;
	cursor: pointer;
}
input#tic{

	left:25%;
	margin-left: 28px;
    cursor: pointer;


}
input#ticordB
{
	left:60%;
	margin-left: 17%;
	cursor: pointer;

}
input#ticordU
{
		left:65%;
	

}
input#name{
	left:48%;
	top:41%;
	cursor: pointer;
}
label#Tsetcord{
	margin-right: 60px;
}

.btn2{
	position:absolute;
	width:85%;
	left:4%;
	top:77%;
}

input[type=text]{
  


}
} 

@media screen and (max-width: 1100px) {
.a
{
margin:0;
width:100%;
height: 100%;
left:0;

}

p#name1{
font-size: 10px;

}

div#editor
{
	position:relative;
	left:0;
	width:100%;
	height: 100%;
}
input#ticord
{
	left:35%;


}

p#ti{

	font-size: 1em;
}
input#ticordX
{
	left:28%;


}
input#ticolor
{
	left:25%;
	margin-left: 15px;
}
input#tic{
	left:25%;
	margin-left: 28px;
	width:18%;

}
input#ticordB
{
	left:30%;

}
input#ticordU
{
		left:35%;

}
input#name{
	left:48%;
	top:41%;
	cursor: pointer;
}
label#Tsetcord{
	margin-right: 40px;
}

.btn2{
	position:absolute;
	width:85%;
	left:4%;
	top:77%;
}
} 




</style>
</head>
<div class="a">

<form method="POST" action="maintask.php">
<textarea  name="title" id="tit"></textarea>
<br>
<textarea  name="subtitle" id="subtit"></textarea>
 <br>
<p id="name1">This is to certify that Mr./Mrs.  </p>
            <input type="text" name="name" id="name" placeholder= "Student Name" size = "36">

<br>
<textarea name="EventDetails1" id="eventdetails1" ></textarea>
<br>
 <button name="gen" class="btn">Generate Certificate</button>
  <button name="saved" class="btn1">Save This Template</button>
			

</div>
<div id="editor">
	<p id="ti">TITLE</p>	
	<label id="Tsetcolor">Set Color:</label>
	<input type="text" id="ticolor" name="Tcolor">
	<br><br>
	<label id="Tsetcord">Set Co-ordinates:</label>
	<input type="text" id="ticordX" name="TicordX">
	<input type="text" id="ticord" name="TcordY">

	<br><br>
	<p id="ti">IMAGE</p>
    <label id="Tsetcord">Set Co-ordinates:</label>
	<input type="text" id="ticordX" name="imgX">
	<input type="text" id="ticord" name="imgY">

	<br><br>
	<label id="Tsetcord">Set Position:</label>
	<input type="text" id="tic" name="float">

	<br><br>
	<p id="ti">SUBTITLE</p>	
	<label id="Tsetcolor">Set Color:</label>
	<input type="text" id="ticolor" name="STcolor">
	<br><br>
	<label id="Tsetcord">Set Co-ordinates:</label>
	<input type="text" id="ticordX" name="STicordX">
	<input type="text" id="ticord" name="STcordY">
	
	<br><br>
	<p id="ti">TEMPLATE NAME (FOR SAVE ONLY)</p>	
	<label id="Tsetcolor">Set Name:</label>
	<input type="text" id="ticolor" name="Ncolor">
	<br><br>
	<p id="ti">CONTENTS</p>	
	<label id="Tsetcolor">Set Color:</label>
	<input type="text" id="ticolor" name="Ccolor">
	<br><br>
	<label id="Tsetcord">Set Co-ordinates:</label>
	<input type="text" id="ticordX" name="CcordX">
	<input type="text" id="ticord" name="CcordY">
	
	<br>
	</form>
</div>
<?php

?>