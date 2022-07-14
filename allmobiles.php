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

		$myQry = "select * from mobiles;";

		$result = $myConnection->query($myQry);

		echo "<table class='table table-responsive table-hover table-striped'>
			<thead class='thead-dark'>
				<tr>
					<th>image front</th>
					<th>image back</th>
					<th>mobile name</th>
					<th>price</th>					
					<th>Details</th>
					<th>Update</th>
					<th>delete</th>
				</tr>
			</thead>
			<tbody id='myData'>";
		while($row = $result->fetch_assoc())
		{

			echo "<tr>";
			echo "<td>";
			echo '<img src="../images/mobile/'.$row['mobile_id'].'-front.jpg" style="width:30px; height:30px;">';
			echo "</td><td>";
			echo '<img src="../images/mobile/'.$row['mobile_id'].'-back.jpg" style="width:30px; height:30px;">';
			echo "</td><td>";
			echo $row['mobile_name'];
			echo "</td><td>";
			echo $row['price'];
			echo "</td><td></tr>";
			// echo "<a href='view_each.php?id=".$row['mobile_id']."' title='View Complete Record'><button type='button' class='btn btn-primary'>View Details</button></a>";
			// echo "</td><td>";
			// echo "<a href='update.php?id=".$row['mobile_id']."' title='Update student Record'><button type='button' class='btn btn-success'>Update</button></a>";
			// echo "</td><td>";
			// echo "<a href='delete.php?id=".$row['mobile_id']."' title='Delete Complete Record'><button type='button' class='btn btn-primary'>Delete Details</button></a>";
			// echo "</td>

			
		}

		echo "</tbody></table>";
	?>
			</div>
		</div>
	</div>
	
	<?php footer(); ?>


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


</body>
</html>