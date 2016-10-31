<?php
mysql_connect('localhost','root','');
	mysql_select_db('flight');
	session_start();

if (isset($_POST['fname'])&& isset($_POST['fname1'])&& isset($_POST['date']))

{			
					$from=$_POST['fname'];
				$to=$_POST['fname1'];

			$date=$_POST['date'];
	
	

$query="SELECT * FROM `manage` WHERE `departure` LIKE '$from' AND `destination` LIKE '$to'";

$run=mysql_query($query);
$_session['$run1']=$run;
}
else 
echo"SORRY NO FLIGHTS YET FOUNDS";
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Flights</title>
<style type="text/css">
	div{	width: 100%;
			height: 90%;


		}
		.background-image {
    	background-position: center;
    	background-repeat: no-repeat;
    	background-size: cover;
			}
			.background-image1 {
    	background-position: center;
    	background-repeat: no-repeat;
    	background-size: cover;
		opacity:.8;
			}
</style>
</head>
<body style="margin:0px">
<div align="center" style="height:20%; background-color: grey;font-size: 24px; font-family: 'Raleway', sans-serif; color:white"><br>
FLIGHT MANAGEMENT SYSTEM</div>
			<div class="background-image" id="change"  style=" background-image: url('Tour.jpg');" position="relative">
			<div style="width:60%;height:70%;background: rgba(230,205,205,.4);margin:auto;" >
			<span style="font-family: 'Raleway', sans-serif; font-size:25px; color:black">Book Domestic and International Flight Tickets</span>


<table border="0.5" class="background-image1"  background="airpl.jpg" align="center" cellpadding="10" style="border-collapse:collapse;margin:0 auto; "> 
<tr>
<th>DEPARTURE</th>
<th>DESTINATION</th>
<th>DATE</th>
<th>AIRLINE</th>
<th>DEPART</th>
<th>ARRIVAL</th>
<th>PRICE</th>
</tr>
<?php
mysql_connect('localhost','root','');
	mysql_select_db('flight');


while($tes=mysql_fetch_assoc($_session['$run1']))
{	
	    $der=$tes['departure'];
		$nam=$tes['destination'];
		$cod=$tes['date'];
		$airline=$tes['airline'];
		$depart=$tes['depart'];
		$arrival=$tes['arrival'];
		$price=$tes['price'];
		
		
		echo"<tr>";echo"<td>"."$der"."</td>" ;
		echo"<br>";
		echo"<td>"."$nam"."</td>" ;
		echo"<br>";
		echo"<td>"."$cod"."</td>" ;
		echo"<td>"."$airline"."</td>" ;
echo"<td>"."$depart"."</td>" ;
echo"<td>"."$arrival"."</td>" ;
echo"<td>"."$price"."</td>" ;

	
		
}

?>
</table>
</div>

</div></div>
</body>
</html>