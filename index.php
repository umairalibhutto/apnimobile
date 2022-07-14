<?php include('head.php');?>
<!doctype html>
<html lang="en">

<head>
  <?php myheader(); ?>

</head>
<body>
  <!-- navbar start -->
  <?php navbar(); 
 ?>

  <!-- navbar end -->
  <!-- main start -->
<main>
  <section class="sect">
    
    <div class="container-fluid">
      <div class="row">
        <!-- sidebar start -->
        <div class="col-md-2 mycolumn">
          <br>
          <div>

            
            <h4 class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s" >Brands</h4>
            <ul class="wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.5s" >
              
              <?php 
              
                $qry="select brand_id,brand_name from brands";
                $result = $myConnection->query($qry);
                while($row = $result->fetch_assoc())
		{
            
      echo '<a href="brand.php?id='.$row['brand_id'].'">
        <li data-tilt>'.$row['brand_name'].'</li>
      </a>';
    }
              ?>
            </ul>
          </div>
          <div>
            <h4 class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s" >Search By</h4>
            <ul class="wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.5s">
              <h5 class="wow fadeInLeft">Price:</h5>
              <a href="searching.php?search=price>50000&and=&search1=">
                <li data-tilt>Price &gt; 50,000 .Rs</li>
              </a>
              <a href="searching.php?search=price>=40000&and=and&search1=price<=50000">
                <li data-tilt>40,000 - 50,000 .Rs</li>
              </a>
              <a href="searching.php?search=price>=30000&and=and&search1=price<=40000">
                <li data-tilt>30,000 - 40,000 .Rs</li>
              </a>
              <a href="searching.php?search=price>=20000&and=and&search1=price<=30000">
                <li data-tilt>20,000 - 30,000 .Rs</li>
              </a>
              <a href="searching.php?search=price>10000&and=and&search1=price<20000">
                <li data-tilt>10,000 - 20,000 .Rs</li>
              </a>
              <a href="searching.php?search=price<10000&and=&search1=">
                <li data-tilt>Price &lt; 10,000 .Rs</li>
              </a>
            </ul>
            <h5 class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s" >Camera</h5>
            <ul class="wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.5s" >
              
              <a href="searching.php?search=camera>=12">
                <li data-tilt>Camera &gt;&equals; 12 MP</li>
              </a>
              <a href="searching.php?search=camera=8">
                <li data-tilt>8 MP</li>
              </a>
              <a href="searching.php?search=camera=5">
                <li data-tilt>5 MP</li>
              </a>
              <a href="searching.php?search=camera=3">
                <li data-tilt>3 MP</li>
              </a>
              <a href="searching.php?search=camera=vga">
                <li data-tilt>VGA</li>
              </a>
            </ul>

          </div>
          
        </div>
        <!-- sidebar end -->


        <div class="col-md-10">
          <br>


          <!-- mobiles start -->
          <div class="col-lg-12">
            <div class="section_title mb-80">
              <h2 class="text-center wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">latest Mobiles</h2>
            </div>
          </div>

          <br>
<div class="margin">
  <div class="row ml-5">
            
    <div class="col-md-2">
      <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
        <div>
          <div class="dad">
            <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
            <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
          </div>
          
         
            <div class="imagestextf " >
              <h4 class="imagestext1">
                <a href="#">Name Of Mobile</a>
              </h4>
              <h6 class="imagestext2 text-center">
                Price Of Mobile
              </h6>
             
              <div  data-tilt>
                <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                  <a class="rounded" href="#">Show More Details</a>
                </h5>
              </div>
              
            </div>
            
          
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2">
      <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
        <div>
          <div class="dad">
            <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
            <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
          </div>
          
         
            <div class="imagestextf " >
              <h4 class="imagestext1">
                <a href="#">Name Of Mobile</a>
              </h4>
              <h6 class="imagestext2 text-center">
                Price Of Mobile
              </h6>
             
              <div  data-tilt>
                <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                  <a class="rounded" href="#">Show More Details</a>
                </h5>
              </div>
              
            </div>
            
          
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2">
      <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
        <div>
          <div class="dad">
            <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
            <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
          </div>
          
         
            <div class="imagestextf " >
              <h4 class="imagestext1">
                <a href="#">Name Of Mobile</a>
              </h4>
              <h6 class="imagestext2 text-center">
                Price Of Mobile
              </h6>
             
              <div  data-tilt>
                <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                  <a class="rounded" href="#">Show More Details</a>
                </h5>
              </div>
              
            </div>
            
          
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2">
      <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
        <div>
          <div class="dad">
            <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
            <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
          </div>
          
         
            <div class="imagestextf " >
              <h4 class="imagestext1">
                <a href="#">Name Of Mobile</a>
              </h4>
              <h6 class="imagestext2 text-center">
                Price Of Mobile
              </h6>
             
              <div  data-tilt>
                <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                  <a class="rounded" href="#">Show More Details</a>
                </h5>
              </div>
              
            </div>
            
          
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
    







  </div>
</div>
<br>
          

          
          <br>
          <div class="margin">
            <div class="row ml-5">
            
              <div class="col-md-2">
                <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
                  <div>
                    <div class="dad">
                      <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
                      <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
                    </div>
                    
                   
                      <div class="imagestextf " >
                        <h4 class="imagestext1">
                          <a href="#">Name Of Mobile</a>
                        </h4>
                        <h6 class="imagestext2 text-center">
                          Price Of Mobile
                        </h6>
                       
                        <div  data-tilt>
                          <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                            <a class="rounded" href="#">Show More Details</a>
                          </h5>
                        </div>
                        
                      </div>
                      
                    
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-2">
                <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
                  <div>
                    <div class="dad">
                      <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
                      <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
                    </div>
                    
                   
                      <div class="imagestextf " >
                        <h4 class="imagestext1">
                          <a href="#">Name Of Mobile</a>
                        </h4>
                        <h6 class="imagestext2 text-center">
                          Price Of Mobile
                        </h6>
                       
                        <div  data-tilt>
                          <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                            <a class="rounded" href="#">Show More Details</a>
                          </h5>
                        </div>
                        
                      </div>
                      
                    
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-2">
                <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
                  <div>
                    <div class="dad">
                      <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
                      <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
                    </div>
                    
                   
                      <div class="imagestextf " >
                        <h4 class="imagestext1">
                          <a href="#">Name Of Mobile</a>
                        </h4>
                        <h6 class="imagestext2 text-center">
                          Price Of Mobile
                        </h6>
                       
                        <div  data-tilt>
                          <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                            <a class="rounded" href="#">Show More Details</a>
                          </h5>
                        </div>
                        
                      </div>
                      
                    
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-2">
                <div class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
                  <div>
                    <div class="dad">
                      <img data-tilt class="images child1" src="assets/images/phone-image.png" alt="">
                      <img data-tilt class="images child2" src="assets/images/iphone.png" alt="">
                    </div>
                    
                   
                      <div class="imagestextf " >
                        <h4 class="imagestext1">
                          <a href="#">Name Of Mobile</a>
                        </h4>
                        <h6 class="imagestext2 text-center">
                          Price Of Mobile
                        </h6>
                       
                        <div  data-tilt>
                          <h5 class="wow imagestext fadeInDown" data-wow-duration="300ms" data-wow-delay="3s">
                            <a class="rounded" href="#">Show More Details</a>
                          </h5>
                        </div>
                        
                      </div>
                      
                    
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              
          
          
          
          
          
          
          
            </div>
          </div>
          
          <br><br>

          <!-- mobiles end -->






        </div>

      </div>

    </div>
    <br><br><br>
<?php footer();?>
 <br>

 <br>

 <br>

  </section>
</main>

  <!-- main end -->

  
  


 
  <!-- section  end -->




 
</body>
<!-- Ajax -->
<!-- <script type="text/javascript">
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

			myReq.open("GET", "searchajax1.php?mobilename="+q, true);

			myReq.send();
      document.getElementById('showme').style.display="inline-block";

		}
	</script> -->
<?php scripts();?>
</html>