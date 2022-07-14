<?php
include('head.php');
		$myQry = "select * from mobiles where mobile_name like '%".$_GET['mobilename']."%';";
		$result = $myConnection->query($myQry);

	
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
			echo "</td><td>";
			echo "<a href='view_each.php?id=".$row['mobile_id']."' title='View Complete Record'><button type='button' class='btn btn-primary'>View Details</button></a>";
			echo "</td><td>";
			echo "<a href='update.php?id=".$row['mobile_id']."' title='Update student Record'><button type='button' class='btn btn-success'>Update</button></a>";
			echo "</td><td>";
			echo "<a href='vieweach.php?id=".$row['mobile_id']."' title='Delete Complete Record'><button type='button' class='btn btn-primary'>Delete Details</button></a>";
			echo "</td></tr>";
		}
	?>