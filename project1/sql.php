<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <body>
        <h2 align="center">Project 1</h2>
	<h3 align="center">Vivek Menon</h3>
	<h4 align="center">ID:2434</h4>
       

	 <?php
            if(!@mysql_connect("134.74.112.65", "meno14f", "vivek")) {
                echo "<h2>Connection Error.</h2>";
                die();
            }
            mysql_select_db("d530");
         ?>	
	 


	 <h4>a)What PC models have a speed of at least 3.00? </h4>
		<table border="5">
		<tr valign="middle">
		<td>model</td>
		</tr>
		</table>	
			
  		  <table border="5"> 	
		  <?php
		    
		     $result = mysql_query("SELECT model FROM PC WHERE speed >= 3.00");
		     $i = 0;
			
		  while ($row = mysql_fetch_array($result)) {
		     echo "<tr valign='middle'>";
		      echo "<td width= '84%'>".$row['model']."</td>";
		       echo "</tr>";
		      $i++;
		  }
            ?>
	    </table>
	



	<h4> b) Which manufactures make laptop with a hard disk of at the least 100GB?</h4>
		<table border="5">
		<tr valign="middle">
		<td>make</td>
		</tr>
		</table>	
	 <table border="5">
		  <?php
	         $result = mysql_query("SELECT DISTINCT make FROM Product, Laptop WHERE Product.model IN (SELECT model FROM Laptop WHERE hd >= 100)");
		    $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		      echo "<td width='35%'>".$row['make']."</td>";
		      echo "</tr>";
		      $i++;
		  }
            ?>
	</table>





	 <h4> c) Find the model number and price of all products (of any type) made by manufacture B.</h4> 
	<table border="5">
		<tr valign="middle">
		<td width = "45%">model</td>
		<td width = "65%">price</td>
		</tr>
		</table>	
	 <table border="5">
		  <?php
		     $result = mysql_query("(SELECT model,price FROM PC WHERE model IN(SELECT model FROM Product WHERE make ='B')) UNION (SELECT 				model,price 
                      FROM Laptop WHERE model IN(SELECT model FROM Product WHERE make ='B')) UNION (SELECT model,price FROM Printer WHERE model IN(SELECT 				model FROM Product 
                      WHERE make ='B'))");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		     echo "<td>".$row['model']."</td>";
		     echo "<td>".$row['price']."</td>";
		      echo "</tr>";
		      $i++;
		 }
            ?>
	</table>




	<h4> d)Find distinct pairs of PC models with same CPU speed and RAM capacity. </h4>
		<table border="5">
		<tr valign="middle">
		<td>model</td>
		</tr>
		</table>		
	<table border= "5">	
		  <?php
	          $result = mysql_query("SELECT p1.model FROM PC AS p1, PC AS p2 WHERE p1.speed = p2.speed AND p1.ram = p2.ram AND p1.model<>p2.model; ");		   
			  $i = 0;
		  while ($row = mysql_fetch_array($result)) {
	             echo "<tr valign='middle'>";
		     echo "<td width= '84%'>".$row['model']."</td>";
		     echo "</tr>";
		      $i++;
		 }
            ?>
		</table>

    </body>
</html>
