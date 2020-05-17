
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		div{
			text-align:center;
			font-size: 50px;
			margin-top: 200px;
            color:orange;
            text-transform: capitalize;
		}
    </style>
</head>
<body>
	<center><h1>8 Create a program to illustrate the concept of associative array in PHP.<h1>
	<h2>enter name of country to know capital</h2></center>	
	<form action="a.php" method="post">
		<center><input  name="nm">
		<button type="submit">Submit</button>
	</form>
<?php

if (isset($_POST['nm']))
{
   my();
}
function my()
{
	 $m= $_POST['nm'] ;
	
     $arr= array("india"=>" New delhi", "america"=>"Washinhton, D.C.", "england"=>"london","australia"=>"canberra","japan"=>"tokyo","china"=>"beijing","france"=>"paris","russia"=>"mosco"
 			);

     if (array_key_exists($m,$arr)) {
     echo "<div>".$m."->".$arr[$m]."</div>"	;
   	 }
   	else{
   		echo "<div>"."donot know"."</div>"	;
   	}
 }

?>
</body>
</html>
