 <?php
 include("dbconnect.php");
	if(isset($_GET['cid'])){
	 $result = mysqli_query($db, "SELECT *FROM  products WHERE catid = ".$_GET['cid'] );
 ?>
 <table border="1" cellpadding="5" cellspacing="0">
 
 <?php 
   while ($row = mysqli_fetch_assoc($result)){
	   $pid = $row['id'];
	   $pname = $row['name'];
	   $pprice = $row['price'];
	   
	   echo "<tr><td><a href='product-details.php?pid=$pid'>".$pname." - $price</a></td></tr>";
   }
  ?>
   </table>
   <?php
	}else{
		header("location: index.php");
	}
   ?>
	 

