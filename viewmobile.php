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
			
				<?php

		$myQry = "select * from mobiles where mobile_id=".$_GET['id'].";";

		$result = $myConnection->query($myQry);

		if($row = $result->fetch_assoc())
		{
			$myQry2 = "select * from brands where brand_id=".$row['brand_id'].";";
			$result2 = $myConnection->query($myQry2);
			$row2 = $result2->fetch_assoc();

			echo "<br> front image:";
			echo '<img src="../images/mobile/'.$row['mobile_id'].'-front.jpg" style="width:100px; height:200px;">';
			echo "<br> back image:";
			echo '<img src="../images/mobile/'.$row['mobile_id'].'-back.jpg" style="width:100px; height:200px;">';
			echo "<div class='col-12'>";
			echo "<br> brand_name:";
			echo $row2['brand_name'];
			echo "<br> mobile_name:";
			echo $row['mobile_name'];
			echo "<br> os:";
			echo $row['os'];
			echo "<br> ui:";
			echo $row['ui'];
			echo "<br> dimensions:";
			echo $row['dimensions'];
			echo "<br> weight:";
			echo $row['weight'];
			echo "<br> sim:";
			echo $row['sim'];
			echo "<br> colors:";
			echo $row['colors'];
			echo "<br> 2g:";
			echo $row['2g'];
			echo "<br> 3g:";
			echo $row['3g'];
			echo "<br> 4g:";
			echo $row['4g'];
			echo "<br> 5g:";
			echo $row['5g'];
			echo "<br> cpu:";
			echo $row['cpu'];
			echo "<br> gpu:";
			echo $row['gpu'];
			echo "<br> chipset:";
			echo $row['chipset'];
			echo "<br> technology:";
			echo $row['technology'];
			echo "<br> size:";
			echo $row['size'];
			echo "<br> resolution:";
			echo $row['resolution'];
			echo "<br> protection:";
			echo $row['protection'];
			echo "<br> extra_features:";
			echo $row['extra_features'];
			echo "<br> built_in_memory:";
			echo $row['built_in_memory'];
			echo "<br> card:";
			echo $row['card'];
			echo "<br> main_camera:";
			echo $row['main_camera'];
			echo "<br> camera_features:";
			echo $row['camera_features'];
			echo "<br> front_camera:";
			echo $row['front_camera'];
			echo "<br> wlan:";
			echo $row['wlan'];
			echo "<br> bluetooth:";
			echo $row['bluetooth'];
			echo "<br> gps:";
			echo $row['gps'];
			echo "<br> radio:";
			echo $row['radio'];
			echo "<br> usb:";
			echo $row['usb'];
			echo "<br> nfc:";
			echo $row['nfc'];
			echo "<br> data:";
			echo $row['data'];
			echo "<br> sensors:";
			echo $row['sensors'];
			echo "<br> audio:";
			echo $row['audio'];
			echo "<br> browser:";
			echo $row['browser'];
			echo "<br> massaging:";
			echo $row['massaging'];
			echo "<br> games:";
			echo $row['games'];
			echo "<br> torch:";
			echo $row['torch'];
			echo "<br> extra:";
			echo $row['extra'];
			echo "<br> battery:";
			echo $row['battery'];
			echo "<br> standby_time:";
			echo $row['standby_time'];
			echo "<br> talk_time:";
			echo $row['talk_time'];
			echo "<br> price:";
			echo $row['price'];
			echo "<br> ratings:";
			echo $row['ratings'];
			echo "<a href='update.php?id=".$row['mobile_id']."' title='Update student Record'><button type='button' class='btn btn-success'>Update</button></a>";
			echo "<a href='delete.php?id=".$row['mobile_id']."' title='Delete Complete Record'><button type='button' class='btn btn-primary'>Delete Details</button></a>";
			echo "</div>";
		}

		
	?>
			</div>
		</div>
	</div>
	
	<?php footer(); ?>


</body>
</html>