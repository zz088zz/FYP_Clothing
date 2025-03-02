<!DOCTYPE html>
<html>
<head><title>Add Product</title>
<link href="design.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div id="wrapper">

	<div id="left">
		<?php include("menu.php"); ?>
	</div>
	
	<div id="right">
	<br>
	<br>
	<br>

		<center>

		<h1>Product List</h1>

		<form name="addfrm" method="post" action="">

			<br><p><label>Product Code &nbsp;</label><input type="text" name="product_code" size="12"></br>

			<br><p><label>Product Name</label><input type="text" name="product_name" size="12"></br>

			<br><p><label>Product Price&nbsp;&nbsp;</label><input type="text" name="product_price" size="12"></br>

			<br><p><label>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="product_stock" size="12"></br>

			<br><p><label>Product Colour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<SELECT name="colour" id ="colour">
			<OPTION value="BLACK">BLACK</OPTION>
			<OPTION value="WHITE">WHITE</OPTION>
			</SELECT>
			</br>

			<br><p><label>Description  &nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" name="description" size="12"></br>
		 
			

			<br><p><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</label><input type="file" name="product_image" id="fileToUpload"></p></br>
			
			<input type="button" name="back" value="BACK" onclick="location='productlist.php';">
			<input type="submit" name="savebtn" value="ADD">
		</center>

		</form>
	
	</div>
	
</div>


</body>
</html>

<?php
include("dataconnection.php");
if (isset($_POST["savebtn"])) 	
{
	$product_code = $_POST["product_code"]; //prod_code under pcode 	
	$product_name = $_POST["product_name"]; //prod_name under pname 	
	$colour = $_POST["colour"];
	$description = $_POST["description"];
	$product_price = $_POST["product_price"]; //prod_size under psize
	$product_stock = $_POST["product_stock"]; //prod_price under pprice 
 	$product_image = $_POST["product_image"];	//prod_stock under pstock
	
	
$result = mysqli_query($connect,"SELECT * from product where product_code = '$product_code' || product_name='$product_name'" );
$count = mysqli_num_rows($result);
	
	if ($count != 0)
	{
	?>
		<script type = "text/javascript">
			alert("The product code or product name is already in use. Please change.");
		</script>
	<?php
	}
	else
	{
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
							mysqli_query($connect,"INSERT INTO product (product_code,product_name,colour,description,product_price,product_stock,product_image) 
							VALUES('$product_code','$product_name','$colour','$description','$product_price','$product_stock','$product_image')");
?>
					
							<script type="text/javascript">
							alert(" Record saved!");
							</script>
							<?php
    					}
					}
    			}
			}
			

	
	}
}
 
?>