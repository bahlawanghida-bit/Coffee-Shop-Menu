<?php
     include("dbconnect.php");
	 $result=mysqli_query($db, "SELECT *FROM category" );
?>
   <table border="1" cellpadding="5" cellspacing="0">
   
 <?php 
   while ($row = msqli_fetch_assoc($result)){
	   $cid = $row['id'];
	   $cname = $row['name'];
	   echo "<tr><td><a href='products.php?cid=$cid'>".$cname."</a></td></tr>";
   }
   ?>
   </table>
	 






















?>