<?php
include('head.php');

// if(!isset($_SESSION['log']))
// {
//  	header('location:login.php');
// }
?>

<!DOCTYPE html>
<html>
<head>
	<?php myHead("Add Student"); ?>
</head>
<body>


	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Add Mobile Data</h1>
			</div>

			<div class="col-12">
				<form method="POST" enctype="multipart/form-data" >
		<div>
			<label>Mobile Picture front<input type="file" name="mpic1" placeholder="front"></label>
		</div>
		<div>
			<label>Mobile Picture back<input type="file" name="mpic2" placeholder="front"></label>
		</div>
		<div>
			<label>Brand Name : <select name="brand">
				<option disabled>select brand</option>
				<option value="1">1-Samsung</option>
				<option value="2">2-Xiaomi</option>	
			</select> </label>
		</div>
		
		<div>
			<label>Mobile name <input type="text" name="mname" placeholder="Enter Mobile Name"></label>
		</div>

		<div>
			<label>OS <input type="text" name="os" placeholder="Enter OS"></label>
		</div>

		<div>
			<label>UI <input type="text" name="ui" placeholder="Enter UI"></label>
		</div>
		<div>
			<label>Dimensions <input type="text" name="dimension" placeholder="Enter Dimensions"></label>
		</div>
		<div>
			<label>Weight <input type="text" name="weight" placeholder="Enter Weight"></label>
		</div>
		<div>
			<label>Sim <input type="text" name="sim" placeholder="Enter Sim"></label>
		</div>
		<div>
			<label>Colors <input type="text" name="color" placeholder="Enter Colors"></label>
		</div>
		<div>
			<label>2g <input type="text" name="2g" placeholder="Enter 2g"></label>
		</div>
		<div>
			<label>3g <input type="text" name="3g" placeholder="Enter 3g"></label>
		</div>
		<div>
			<label>4g <input type="text" name="4g" placeholder="Enter 4g"></label>
		</div>
		<div>
			<label>5g <input type="text" name="5g" placeholder="Enter 5g"></label>
		</div>
		<div>
			<label>CPU <input type="text" name="cpu" placeholder="Enter CPU"></label>
		</div>
		<div>
			<label>GPU <input type="text" name="gpu" placeholder="Enter GPU"></label>
		</div>
		<div>
			<label>Chipset <input type="text" name="chipset" placeholder="Enter Chipset"></label>
		</div>
		<div>
			<label>Technology <input type="text" name="technology" placeholder="Enter Technology"></label>
		</div>
		<div>
			<label>Size <input type="text" name="size" placeholder="Enter Size"></label>
		</div>
		<div>
			<label>Resolution <input type="text" name="resolution" placeholder="Enter Resolution"></label>
		</div>
		<div>
			<label>Protection <input type="text" name="protection" placeholder="Enter Protection"></label>
		</div>
		<div>
			<label>Extra Features <input type="text" name="extrafeature" placeholder="Enter Extra Features"></label>
		</div>
		<div>
			<label>Built In Memory <input type="text" name="builtin" placeholder="Enter Built In Memory"></label>
		</div>
		<div>
			<label>Card <input type="text" name="card" placeholder="Enter Card"></label>
		</div>
		<div>
			<label>Main Camera <input type="text" name="maincamera" placeholder="Enter Main Camera"></label>
		</div>
		<div>
			<label>Camera Features <input type="text" name="camerafeature" placeholder="Enter Camera Features"></label>
		</div>
		<div>
			<label>Front Camera <input type="text" name="frontcamera" placeholder="Enter Front Camera"></label>
		</div>
		<div>
			<label>Wlan <input type="text" name="wlan" placeholder="Enter Wlan"></label>
		</div>
		<div>
			<label>Bluetooth <input type="text" name="bluetooth" placeholder="Enter Bluetooth"></label>
		</div>
		<div>
			<label>GPS <input type="text" name="gps" placeholder="Enter GPS"></label>
		</div>
		<div>
			<label>Radio <input type="text" name="radio" placeholder="Enter Radio"></label>
		</div>
		<div>
			<label>USB <input type="text" name="usb" placeholder="Enter USB"></label>
		</div>
		<div>
			<label>NFC <input type="text" name="nfc" placeholder="Enter NFC"></label>
		</div>
		<div>
			<label>Data <input type="text" name="data" placeholder="Enter Data"></label>
		</div>
		<div>
			<label>Sensors <input type="text" name="sensors" placeholder="Enter Sensors"></label>
		</div>
		<div>
			<label>Audio <input type="text" name="audio" placeholder="Enter Browser"></label>
		</div>
		<div>
			<label>Browser <input type="text" name="browser" placeholder="Enter Browser"></label>
		</div>
		<div>
			<label>Massaging <input type="text" name="massaging" placeholder="Enter Massaging"></label>
		</div>
		<div>
			<label>Games <input type="text" name="game" placeholder="Enter Games"></label>
		</div>
		<div>
			<label>Torch <input type="text" name="torch" placeholder="Enter Torch"></label>
		</div>
		<div>
			<label>Extra <input type="text" name="extra" placeholder="Enter Extra"></label>
		</div>
		<div>
			<label>Battery <input type="text" name="battery" placeholder="Enter Battery"></label>
		</div>
		<div>
			<label>Standby time <input type="text" name="standby" placeholder="Enter Standby time"></label>
		</div>
		<div>
			<label>Talk Time <input type="text" name="talk" placeholder="Enter Talk Time"></label>
		</div>
		<div>
			<label>Price <input type="text" name="price" placeholder="Enter Price"></label>
		</div>
		<div>
			<label>Ratings <input type="text" name="rating" placeholder="Enter Ratings"></label>
		</div>

		<div>
			<label><input type="submit" name="save" value="Save Data" class='btn btn-primary'></label>
		</div>
		
	</form>


	<?php


	if(isset($_POST['save']))
	{
		$qry = "insert into mobiles values (null,'".$_POST['brand']."', '".$_POST['mname']."', '".$_POST['os']."', '".$_POST['ui']."', '".$_POST['dimension']."', '".$_POST['weight']."', '".$_POST['sim']."', '".$_POST['color']."', '".$_POST['2g']."', '".$_POST['3g']."', '".$_POST['4g']."', '".$_POST['5g']."', '".$_POST['cpu']."', '".$_POST['gpu']."', '".$_POST['chipset']."', '".$_POST['technology']."', '".$_POST['size']."', '".$_POST['resolution']."', '".$_POST['protection']."', '".$_POST['extrafeature']."','".$_POST['builtin']."', '".$_POST['card']."', '".$_POST['maincamera']."', '".$_POST['camerafeature']."', '".$_POST['frontcamera']."', '".$_POST['wlan']."', '".$_POST['bluetooth']."', '".$_POST['gps']."', '".$_POST['radio']."', '".$_POST['usb']."', '".$_POST['nfc']."', '".$_POST['data']."', '".$_POST['sensors']."', '".$_POST['audio']."', '".$_POST['browser']."','".$_POST['massaging']."','".$_POST['game']."','".$_POST['torch']."','".$_POST['extra']."','".$_POST['battery']."','".$_POST['standby']."','".$_POST['talk']."','".$_POST['price']."','".$_POST['rating']."');";

		if($myConnection->query($qry))
		{
			
			$lastid = $myConnection->insert_id;
			move_uploaded_file($_FILES['mpic1']['tmp_name'], "../images/mobile/".$lastid."-front.jpg");
			move_uploaded_file($_FILES['mpic2']['tmp_name'], "../images/mobile/".$lastid."-back.jpg");
			echo "<script>window.location.href = 'view_all_ajax.php';</script>";
			
		}
		else
		{
			
			echo "Data not inserted<br>".$qry.$myConnection->error;
		}
	}

	?>
			</div>
		</div>
	</div>
	
	


</body>
</html>