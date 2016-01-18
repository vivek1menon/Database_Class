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
		 

		 	
		<?php	
		if($_GET[pname] && $_GET[paddress])		
		{		
			$sql = mysql_query("INSERT INTO Producer (PName, PAddress)
			VALUES ('$_GET[pname]', '$_GET[paddress]')");
			$sql = mysql_query("INSERT INTO Produced (PName, PAddress)
			VALUES ('$_GET[pname]', '$_GET[paddress]')");
			}
		?>
		
		<?php	
		if($_GET[sname] && $_GET[saddress])		
		{		
			$sql = mysql_query("INSERT INTO Supplier (SName, SAddress)
			VALUES ('$_GET[sname]', '$_GET[saddress]')");
			$sql = mysql_query("INSERT INTO Supplied (SName, SAddress)
			VALUES ('$_GET[sname]', '$_GET[saddress]')");
			}
		?>
		
		
		<?php	
		if($_GET[title] && $_GET[type] && $_Get[year])		
		{		
			$sql = mysql_query("INSERT INTO CD (Title, Type, Year)
			VALUES ('$_GET[title]', '$_GET[type]', '$_GET[year]')");	 
		}
		?>
		
		<?php	
		if($_GET[title] && $_GET[ssn] && $_GET[cname] && $_GET[telephone])		
		{		
			$sql = mysql_query("INSERT INTO Customer (Title, SSN, CName, Telephone)
			VALUES ('$_GET[title]', '$_GET[ssn]', '$_GET[cname]', '$_GET[telephone]')");
			}
		?>
		
		
		<?php	
		if($_GET[vtitle] && $_GET[vssn] && $_GET[vname] && $_GET[vtelephone] && $_GET[vdate] && $_GET[discount])		
		{		
			
			$sql = mysql_query("INSERT INTO VIP (Title, SSN, CName, Telephone, VDate, Discount)
			VALUES ('$_GET[vtitle]', '$_GET[vssn]', '$_GET[vname]', '$_GET[vtelephone]' $_GET[vdate]', '$_GET[discount]')");
				}
			
		?>
		
		
		<div id="header">	
		<h1> Producer </h1>
		<table border="5">
		<tr valign="middle">
		<td>Name</td>
		<td>Address</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT * FROM Producer");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		     echo "<td>".$row['PName']."</td>";
		     echo "<td>".$row['PAddress']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>
		


		<div id="section">	
		<h1> CD </h1>
		<table border="5">
		<tr valign="middle">
		<td>Title</td>
		<td>Type</td>
		<td>Year</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT * FROM CD");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		      echo "<td>".$row['Title']."</td>";
		      echo "<td>".$row['Type']."</td>";
		      echo "<td>".$row['Year']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>
		
		<div id="header">	
		<h1> Supplier </h1>
		<table border="5">
		<tr valign="middle">
		<td>Name</td>
		<td>Address</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT * FROM Supplier");
		      $i = 0;
		    while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		     echo "<td>".$row['SName']."</td>";
		     echo "<td>".$row['SAddress']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>

	    <div id="section">	
		<h1> Customer </h1>
		<table border="5">
		<tr valign="middle">
		<td>Title</td>
		<td>SSN</td>
		<td>CName</td>
		<td>Telephone#</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT * FROM Customer");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		      echo "<td>".$row['Title']."</td>";
		      echo "<td>".$row['SSN']."</td>";
		      echo "<td>".$row['CName']."</td>";
			  echo "<td>".$row['Telephone']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>
		
		
		<div id="section">	
		<h1> VIP Customer </h1>
		<table border="5">
		<tr valign="middle">
		<td>Title</td>
		<td>SSN</td>
		<td>CName</td>
		<td>Telephone#</td>
		<td>Date of VIP</td>
		<td>VIP Discount</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT * FROM VIP");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		      echo "<td>".$row['Title']."</td>";
		      echo "<td>".$row['SSN']."</td>";
		      echo "<td>".$row['CName']."</td>";
			  echo "<td>".$row['Telephone']."</td>";
			  echo "<td>".$row['VDate']."</td>";
			  echo "<td>".$row['Discount']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>

		
		
		<div id="header">	
		<h1> Songs </h1>
		<table border="5">
		<tr valign="middle">
		<td>Title</td>
		<td>Type</td>
		<td>Year</td>
		<td>Track Number</td>
		<td>Song Name</td>
		<td>Artist</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT * FROM Songs");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		      echo "<td>".$row['Title']."</td>";
		      echo "<td>".$row['Type']."</td>";
		      echo "<td>".$row['Year']."</td>";
			  echo "<td>".$row['Track']."</td>";
			  echo "<td>".$row['SongName']."</td>";
			  echo "<td>".$row['Artist']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>

		
		
		
		<div id="section">	
		<h1> Rent </h1>
		<table border="5">
		<tr valign="middle">
		<td>Title</td>
		<td>Customer Name</td>
		<td>Period</td>
		<td>Date</td>
		</tr>
		
		
		<?php	
		    
		    $result = mysql_query("SELECT * FROM Rent");
		      $i = 0;
		  while ($row = mysql_fetch_array($result)) {
		      echo "<tr valign='middle'>";
		      echo "<td>".$row['Title']."</td>";
		      echo "<td>".$row['CName']."</td>";
			  echo "<td>".$row['Period']."</td>";
			  echo "<td>".$row['Date']."</td>";
		      echo "</tr>";
		      $i++;
		 }
         	    		
		?>
			</table>
	    
	    </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
</body>
</html>
