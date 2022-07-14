

<?php
include('head.php');

		$myQry = "select mobile_id,mobile_name from mobiles where mobile_name like '%".$_GET['mobilename']."%';";

		$result = $myConnection->query($myQry);

	
	?>


        
          <div class="navfather">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q" id="mySearchQ1" onkeyup="myData1() ,display()">
              <button type="button" class="btn btn-success">Search</button>
              </form>
              <div id="showme" class="navchild">
            <?php 
              while($row = $result->fetch_assoc())
              {
                echo '<img src="../images/mobile/'.$row['mobile_id'].'-front.jpg">';
			          echo '<img src="../images/mobile/'.$row['mobile_id'].'-back.jpg">';
			          echo $row['mobile_name'];
              }
              ?>
              </div>
          </div>
 

  
<?php
      // echo "<tr>";
			// echo "<td>";
			// echo '<img src="../images/mobile/'.$row['mobile_id'].'-front.jpg" style="width:30px; height:30px;">';
			// echo "</td><td>";
			// echo '<img src="../images/mobile/'.$row['mobile_id'].'-back.jpg" style="width:30px; height:30px;">';
			// echo "</td><td>";
			// echo $row['mobile_name'];
			// echo "</td><td>";
			// echo $row['price'];
			// echo "</td><td>";
			// echo "<a href='view_each.php?id=".$row['mobile_id']."' title='View Complete Record'><button type='button' class='btn btn-primary'>View Details</button></a>";
			// echo "</td><td>";
			// echo "<a href='update.php?id=".$row['mobile_id']."' title='Update student Record'><button type='button' class='btn btn-success'>Update</button></a>";
			// echo "</td><td>";
			// echo "<a href='vieweach.php?id=".$row['mobile_id']."' title='Delete Complete Record'><button type='button' class='btn btn-primary'>Delete Details</button></a>";
			// echo "</td></tr>";
?>



 
  <!-- display -->
  <script>
function display() {
  document.getElementById('showme').style.display="inline-block";
  
}
  </script>
  <!-- Ajax -->
  <script type="text/javascript">
    var q;
		function myData1()
		{
			q = document.getElementById('mySearchQ1').value;

			var myReq = new XMLHttpRequest();

			myReq.onreadystatechange = function(){

				if(this.readyState == 4 && this.status==200)
				{
					document.getElementById("myData1").innerHTML = this.responseText;
				}
			}

			myReq.open("GET", "search_ajax1.php?mobilename="+q, true);

			myReq.send();

		}
	</script>

  
 
  <!-- section  end -->




  <script src="assets/vendor/js/jquery-1.12.4.min.js"></script>
  <script src="assets/vendor/js/tilt.jquery.js"></script>
  <script src="assets/vendor/js/animation.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>