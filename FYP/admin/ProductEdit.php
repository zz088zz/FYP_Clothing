<?php include("dataconnection.php"); ?>
 
<html>
<head><title>Product Edit</title>
<link href="design.css" type="text/css" rel="stylesheet" />
</head>
<body>
 
<div id="wrapper">
 
	<div id="left">
		<?php include("menu.php"); ?>
	</div>
	
	<div id="right">
 
		<?php
		if(isset($_GET["edit"]))
		{
		 
			$product_id = $_GET["product_id"];
 
			$result = mysqli_query($connect, "select * from product where product_id = $product_id");
			$row = mysqli_fetch_assoc($result);
		?>
		
		<h1>Product</h1>
		<center>
 
		<form name="addfrm" method="post" action="">

			<p><label>Current Image</label><input type="hidden" name="product_image" id="fileToUpload" value="<?php print $row['product_image']?>"></p>
			<p><img src="../images/<?php print $row['product_image']?>" width="100" height="auto"></p>

			<br><p><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</label><input type="file" name="nproduct_image" id="nfileToUpload"></p></br>

			<br><p><label>Product Name</label>&nbsp;&nbsp;<input type="text" name="product_name"value="<?php echo $row['product_name']; ?>"></br>

			<br><p><label>Product Price&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="product_price" value=<?php echo $row['product_price']; ?>></br>

			<br><p><label>Product Stock&nbsp;&nbsp;&nbsp;</label><input type="text" name="product_stock" value=<?php echo $row['product_stock']; ?>></br>

			<br><p><label>Product Colour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<SELECT name="colour" id ="colour">
			<OPTION value="BLACK">BLACK</OPTION>
			<OPTION value="WHITE">WHITE</OPTION>
			</SELECT>
			</br>

			<br><p><label>Description  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" name="description" value=<?php echo $row['description']; ?>></br>
			
			<br><p><input type="submit" name="savebtn" value="SAVE"></br>
 
		</form>
		</center>
	    <?php 
		}
		  ?>
	</div>
	
</div>
 
 
</body>
</html>
 
<?php
 
if (isset($_POST["savebtn"])) 	
{
	$product_image = $_POST["product_image"];  	
	$product_name = $_POST["product_name"];  	
	$colour = $_POST["colour"];
	$description = $_POST["description"];
	$product_price = $_POST["product_price"];  	
	$product_stock = $_POST["product_stock"];  	
	
	$nproduct_image = $_POST["nproduct_image"];
	$product_image = $_POST["product_image"]; 
	
	if($nproduct_image != "")
	{
		$updatefile= $nproduct_image;
	}
	else
	{
		$updatefile= $product_image;
	}
	
	if (isset($_POST['product_price'])) 
			{
   				$price = $_POST['product_price'];
    			if ($price <= 0.00) 
				{?>
					<script type="text/javascript">
					alert(" Product price must more than 0.00");
					</script>
					<?php

    			} 
				else 
				{
					if (isset($_POST['product_stock'])) 
					{
   						$stock = $_POST['product_stock'];
    					if ($stock < 0) 
						{?>
							<script type="text/javascript">
							alert(" Product stock cannot be negative");
							</script>
							<?php

    					} 
						else 
						{
							//else insert into database
							mysqli_query($connect,"update product set product_image='$updatefile', product_name='$product_name', colour='$colour',description='$description',product_price=$product_price, product_stock=$product_stock where product_id=$product_id");
	
							?>
	
							<script type="text/javascript">
							alert("Product Updated");
							</script>
	
							<?php
	
							header( "refresh:0.5; url=ProductList.php" );
    					}
					}
    			}
			}
	
}
 
?>

