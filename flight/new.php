<?php
 $m=new MongoClient();
 $db=$m->birds;
 echo"Connected to Database Birds<br>";
 $coll=$db->pets;
 echo"Collection slected<br>";


 $x=$coll->find(array("departure"=>"New Delhi,DEL"));


echo" <table border='0.5' cellpadding='10' style='border-collapse:collapse;margin:0 auto;'>" ;
echo"<tr>";
echo"<th>DEPARTURE</th>";
echo"<th>DESTINATION</th>";
echo"<th>DATE</th>";
echo"<th>AIRLINE</th>";
echo"<th>DEPART</th>";
echo"<th>ARRIVAL</th>";
echo"<th>PRICE</th>";
echo"</tr>";

 foreach($x as $abc)
 {	echo"<tr>";echo"<td>".$abc["departure"]."</td>" ;
		echo"<br>";
		echo"<td>".$abc["destination"]."</td>" ;
		echo"<br>";
		echo"<td>".$abc["date"]."</td>" ;
		echo"<td>".$abc["airline"]."</td>" ;
echo"<td>".$abc["depart"]."</td>" ;
echo"<td>".$abc["arrival"]."</td>" ;
echo"<td>".$abc["price"]."</td>" ;

	
		
 }



 ?>