<?php include('head.php');
// if(!isset($_SESSION['log']))
// {
//  	header('location:login.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
	<?php myHead("Update Student"); ?>
</head>
<body>

	<?php myHeader(); ?>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Update Student</h1>
			</div>
			<div class="col-12">
				<?php

	$myQry = "select * from mobiles where mobile_id=".$_GET['id'].";";

	$result = $myConnection->query($myQry);

	$row = $result->fetch_assoc();
	

	echo '<form method="POST" enctype="multipart/form-data" >
	<div>
		<label>Mobile Picture front : <input type="file" name="mpic1"  placeholder="front"></label>
		<div>
			<img src="../images/mobile/'.$row['mobile_id'].'-front.jpg" height="200px" width="100px" alt="image">
		</div>
	</div>
	<div>
		<label>Mobile Picture back : <input type="file" name="mpic2" placeholder="front"></label>
		<div>
			<img src="../images/mobile/'.$row['mobile_id'].'-back.jpg" height="200px" width="100px" alt="image">
		</div>
	</div>
	<div>
		<label>Brand Name : <div>'.$row['brand_id'].'</div>
		<div>please select a brand</div>
		
		<select name="brand">
			<option disabled>select options</option>
			<option value="1">1-Samsung</option>
			<option value="2">2-Xiaomi</option>	
		</select> </label>
	</div>
	
	<div>
		<label>Mobile name <input value="'.$row['mobile_name'].'" type="text" name="mname" placeholder="Enter Mobile Name"></label>
	</div>

	<div>
		<label>OS <input value="'.$row['os'].'" type="text" name="os" placeholder="Enter OS"></label>
	</div>

	<div>
		<label>UI <input value="'.$row['ui'].'" type="text" name="ui" placeholder="Enter UI"></label>
	</div>
	<div>
		<label>Dimensions <input value="'.$row['dimensions'].'" type="text" name="dimension" placeholder="Enter Dimensions"></label>
	</div>
	<div>
		<label>Weight <input value="'.$row['weight'].'" type="text" name="weight" placeholder="Enter Weight"></label>
	</div>
	<div>
		<label>Sim <input value="'.$row['sim'].'" type="text" name="sim" placeholder="Enter Sim"></label>
	</div>
	<div>
		<label>Colors <input value="'.$row['colors'].'" type="text" name="color" placeholder="Enter Colors"></label>
	</div>
	<div>
		<label>2g <input value="'.$row['2g'].'" type="text" name="2g" placeholder="Enter 2g"></label>
	</div>
	<div>
		<label>3g <input value="'.$row['3g'].'" type="text" name="3g" placeholder="Enter 3g"></label>
	</div>
	<div>
		<label>4g <input value="'.$row['4g'].'" type="text" name="4g" placeholder="Enter 4g"></label>
	</div>
	<div>
		<label>5g <input value="'.$row['5g'].'" type="text" name="5g" placeholder="Enter 5g"></label>
	</div>
	<div>
		<label>CPU <input value="'.$row['cpu'].'" type="text" name="cpu" placeholder="Enter CPU"></label>
	</div>
	<div>
		<label>GPU <input  value="'.$row['gpu'].'" type="text" name="gpu" placeholder="Enter GPU"></label>
	</div>
	<div>
		<label>Chipset <input value="'.$row['chipset'].'" type="text" name="chipset" placeholder="Enter Chipset"></label>
	</div>
	<div>
		<label>Technology <input value="'.$row['technology'].'" type="text" name="technology" placeholder="Enter Technology"></label>
	</div>
	<div>
		<label>Size <input value="'.$row['size'].'" type="text" name="size" placeholder="Enter Size"></label>
	</div>
	<div>
		<label>Resolution <input value="'.$row['resolution'].'" type="text" name="resolution" placeholder="Enter Resolution"></label>
	</div>
	<div>
		<label>Protection <input value="'.$row['protection'].'" type="text" name="protection" placeholder="Enter Protection"></label>
	</div>
	<div>
		<label>Extra Features <input value="'.$row['extra_features'].'" type="text" name="extrafeature" placeholder="Enter Extra Features"></label>
	</div>
	<div>
		<label>Built In Memory <input value="'.$row['built_in_memory'].'" type="text" name="builtin" placeholder="Enter Built In Memory"></label>
	</div>
	<div>
		<label>Card <input value="'.$row['card'].'" type="text" name="card" placeholder="Enter Card"></label>
	</div>
	<div>
		<label>Main Camera <input value="'.$row['main_camera'].'" type="text" name="maincamera" placeholder="Enter Main Camera"></label>
	</div>
	<div>
		<label>Camera Features <input value="'.$row['camera_features'].'" type="text" name="camerafeature" placeholder="Enter Camera Features"></label>
	</div>
	<div>
		<label>Front Camera <input value="'.$row['front_camera'].'" type="text" name="frontcamera" placeholder="Enter Front Camera"></label>
	</div>
	<div>
		<label>Wlan <input value="'.$row['wlan'].'" type="text" name="wlan" placeholder="Enter Wlan"></label>
	</div>
	<div>
		<label>Bluetooth <input value="'.$row['bluetooth'].'" type="text" name="bluetooth" placeholder="Enter Bluetooth"></label>
	</div>
	<div>
		<label>GPS <input value="'.$row['gps'].'" type="text" name="gps" placeholder="Enter GPS"></label>
	</div>
	<div>
		<label>Radio <input value="'.$row['radio'].'" type="text" name="radio" placeholder="Enter Radio"></label>
	</div>
	<div>
		<label>USB <input value="'.$row['usb'].'" type="text" name="usb" placeholder="Enter USB"></label>
	</div>
	<div>
		<label>NFC <input value="'.$row['nfc'].'" type="text" name="nfc" placeholder="Enter NFC"></label>
	</div>
	<div>
		<label>Data <input value="'.$row['data'].'" type="text" name="data" placeholder="Enter Data"></label>
	</div>
	<div>
		<label>Sensors <input value="'.$row['sensors'].'" type="text" name="sensors" placeholder="Enter Sensors"></label>
	</div>
	<div>
		<label>Audio <input value="'.$row['audio'].'" type="text" name="audio" placeholder="Enter Browser"></label>
	</div>
	<div>
		<label>Browser <input value="'.$row['browser'].'" type="text" name="browser" placeholder="Enter Browser"></label>
	</div>
	<div>
		<label>Massaging <input value="'.$row['massaging'].'" type="text" name="massaging" placeholder="Enter Massaging"></label>
	</div>
	<div>
		<label>Games <input value="'.$row['games'].'" type="text" name="game" placeholder="Enter Games"></label>
	</div>
	<div>
		<label>Torch <input value="'.$row['torch'].'" type="text" name="torch" placeholder="Enter Torch"></label>
	</div>
	<div>
		<label>Extra <input value="'.$row['extra'].'" type="text" name="extra" placeholder="Enter Extra"></label>
	</div>
	<div>
		<label>Battery <input value="'.$row['battery'].'" type="text" name="battery" placeholder="Enter Battery"></label>
	</div>
	<div>
		<label>Standby time <input value="'.$row['standby_time'].'" type="text" name="standby" placeholder="Enter Standby time"></label>
	</div>
	<div>
		<label>Talk Time <input value="'.$row['talk_time'].'" type="text" name="talk" placeholder="Enter Talk Time"></label>
	</div>
	<div>
		<label>Price <input value="'.$row['price'].'" type="text" name="price" placeholder="Enter Price"></label>
	</div>
	<div>
		<label>Ratings <input value="'.$row['ratings'].'" type="text" name="rating" placeholder="Enter Ratings"></label>
	</div>

	<div>
		<label><input type="submit" name="save" value="Update Data" class="btn btn-primary"></label>
	</div>
	
</form>';



	if(isset($_POST['save']))
	{
	 	$qry = "update mobiles set brand_id = '".$_POST['brand']."', mobile_name = '".$_POST['mname']."', os = '".$_POST['os']."', ui = '".$_POST['ui']."', dimensions = '".$_POST['dimension']."', weight = '".$_POST['weight']."', sim = '".$_POST['sim']."', colors = '".$_POST['color']."', 2g = '".$_POST['2g']."', 3g = '".$_POST['3g']."', 4g = '".$_POST['4g']."', 5g = '".$_POST['5g']."', cpu = '".$_POST['cpu']."', gpu = '".$_POST['gpu']."', chipset = '".$_POST['chipset']."', technology = '".$_POST['technology']."', size = '".$_POST['size']."', resolution = '".$_POST['resolution']."', protection = '".$_POST['protection']."', extra_features = '".$_POST['extrafeature']."', built_in_memory = '".$_POST['builtin']."', card = '".$_POST['card']."', main_camera = '".$_POST['maincamera']."', camera_features = '".$_POST['camerafeature']."', front_camera = '".$_POST['frontcamera']."', wlan = '".$_POST['wlan']."', bluetooth = '".$_POST['bluetooth']."', gps = '".$_POST['gps']."', radio = '".$_POST['radio']."', usb = '".$_POST['usb']."', nfc = '".$_POST['nfc']."', data = '".$_POST['data']."', sensors = '".$_POST['sensors']."', audio = '".$_POST['audio']."', browser = '".$_POST['browser']."', massaging = '".$_POST['massaging']."', games = '".$_POST['game']."', torch = '".$_POST['torch']."', extra = '".$_POST['extra']."', battery = '".$_POST['battery']."', standby_time = '".$_POST['standby']."', talk_time = '".$_POST['talk']."', price = '".$_POST['price']."', ratings = '".$_POST['rating']."' where mobile_id = ".$row['mobile_id'].";";
		
		if($myConnection->query($qry))
		{
			move_uploaded_file($_FILES['mpic1']['tmp_name'], "../images/mobile/".$row['mobile_id']."-front.jpg");
			move_uploaded_file($_FILES['mpic2']['tmp_name'], "../images/mobile/".$row['mobile_id']."-back.jpg");
			echo "Data updated";
  			echo "<script>window.location.href = 'view_all_ajax.php';</script>";
			
		}
		else
		{
			echo $qry.$myConnection->error;
			echo "Data not updated<br>";
		}
	}

	?>
			</div>
		</div>
	</div>
	
	<?php myFooter(); ?>


</body>
</html>