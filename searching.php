<?php include('head.php');?>
<!DOCTYPE html>
<html>
<head>
  <?php myheader(); ?>
</head>
<body>


<?php navbar(); ?>
	<div class="container">
		<div class="row">
			
			<div class="col-12">
				<form class="form-inline">
			    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q" id="mySearchQ" onkeyup="myData()">
			    <button type="button" class="btn btn-success">Search</button>
			</form>
			</div>
			<div class="col-12">
				<?php
$value1=$_GET['search'];
$value2=$_GET['search1'];
$and=$_GET['and'];



	$myQry = "select * from mobiles where $value $and $value1 ;";




	$result = $myConnection->query($myQry);

	echo "<table class='table table-responsive table-hover table-striped'>
		
		<tbody id='myData'>";
		echo "$myQry";
	while($row = $result->fetch_assoc())
	{

		echo '<img src="assets/images/mobile/'.$row['mobile_id'].'-front.jpg" style="width:30px; height:30px;">';
	
		echo '<img src="assets/images/mobile/'.$row['mobile_id'].'-back.jpg" style="width:30px; height:30px;">';

		echo $row['mobile_name'];

		echo $row['price'];
		echo $row[''];

		// echo "<a href='view_each.php?id=".$row['mobile_id']."' title='View Complete Record'><button type='button' class='btn btn-primary'>View Details</button></a>";
		// echo "</td><td>";
		// echo "<a href='update.php?id=".$row['mobile_id']."' title='Update student Record'><button type='button' class='btn btn-success'>Update</button></a>";
		// echo "</td><td>";
		// echo "<a href='delete.php?id=".$row['mobile_id']."' title='Delete Complete Record'><button type='button' class='btn btn-primary'>Delete Details</button></a>";
		// echo "</td></tr>"
		;
	}




		echo "</tbody></table>";
	?>
			</div>
		</div>
	</div>
	
<?php footer();?>


	<script type="text/javascript">
		function myData()
		{
			var q = document.getElementById('mySearchQ').value;

			var myReq = new XMLHttpRequest();

			myReq.onreadystatechange = function(){

				if(this.readyState == 4 && this.status==200)
				{
					document.getElementById("myData").innerHTML = this.responseText;
				}
			}

			myReq.open("GET", "search_ajax.php?mobilename="+q, true);

			myReq.send();

		}
	</script>
<?php scripts();?>

</body>
</html>