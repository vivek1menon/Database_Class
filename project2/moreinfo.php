<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
#header {
    background-color:DarkTurquoise;
    color:White;
    text-align:center;
    padding:5px;
}
#section {
	 background-color:rgb(47,135,179);
    color:White;
    text-align:center;
    padding:5px;
}
</style>
</head>

    <body>
             

	 <?php
            if(!@mysql_connect("134.74.112.65", "meno14f","vivek")) {
                echo "<h2>Connection Error.</h2>";
                die();
            }
            mysql_select_db("d530");
         ?>		
	
		
		<div id="header">	
		<h1> Customer Name and Telephone </h1>
		<table border="5">
		<tr valign="middle">
		<td>Name</td>
		<td>Telephone Number</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT p1.CName, Telephone FROM Rent AS p1, Customer AS p2 WHERE p1.Title = '$_GET[checktitle]' AND p1.CName = p2.CName AND Date = '$_GET[purchasedate]';");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		     echo "<td>".$row['CName']."</td>";
		     echo "<td>".$row['Telephone']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		
</body>
</html>
