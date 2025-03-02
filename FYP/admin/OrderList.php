<?php include("dataconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order</title>
	
    <link rel="stylesheet" href="design.css">
    <style>
        td{
            text-align: center;
        }
    </style>
</head>
<body>
			<?php include("menu.php"); ?>
		</div>
		<div class="home-content">
        <div class="recent-sales box">
        <div class="container">
        <div class="responsive-table">
        <br>
        <br>
        <br>

            <center>
          <table border="1" width="650px">
            <tr>
                      <th>Customer Name</th>							
                      <th>Payment (RM)</th>
                      <th>Date</th>
                      <th>View</th>  
            </tr>
</div>
</center>
			
			<?php
			
            $result = mysqli_query($connect, "select * from orders");	//select attributes from 2 tables
            $count = mysqli_num_rows($result);
            if ($count < 1)
            {
            ?>
                <tr>
                    <td colspan="6">No Records Found</td>
                </tr>
            
            <?php
            }
            else
            {
                while($row = mysqli_fetch_assoc($result))
                {
                ?>			

                <tr>
                    <td><?php echo $row["fname"]; ?></td>							
                    <td><?php echo $row["totalprice"]; ?></td>	
                    <td><?php echo $row["order_date"]; ?></td>								
                    <td><a href="view.php?viewd&orderid=<?php echo $row['orderid']; ?>">View</a></td>
                </tr>
                
                <?php
                
                }
            }
			
			?>
		</table>
		</div>
	</div>

</body>
</html>

<?php
if (isset($_REQUEST["del"])) 
{
	$purchid = $_REQUEST["purchase_id"]; 
	mysqli_query($connect, "delete from purchase where purchase_id = $purchid");
	
	header("Location: order_details.php");
}
 
?>


