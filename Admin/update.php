<?php include('../includes/config.php');?>
<?php include('includes/header.php');?>
<?php
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
  $email=$_POST['email'];
    //$image=$_FILES["image"]["name"];
    //$id=intval($_GET['id']);
    //move_uploaded_file($_FILES["image"]["tmp_name"],"img/profile_pic/".$_FILES["image"]["name"]);
		$query="update user set name=?, password=?, email=?  where userid= ?";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('isss',  $userid,$name,$password,$email);
$stmt->execute();
echo"<script>alert('Your Profile Picture Has Been Updated Successfully');</script>";
}
?>
 <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group ">
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>  <i class="fa fa-user"></i>Profile update
            </ol>
<!--grid-->
 	
  	  <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Username</label>
              <input type="text" value="<?php echo $userrow['name']; ?>" required="" name="name">
            </div>
           <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Password</label>
              <input type="text" value="<?php echo $userrow['password']; ?>" required=""  name="password">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" value="<?php echo $userrow['email']; ?>" required=""  name="email">
			</div>
		
             <div class="clearfix"> </div>
						<!-- <div class="form-group">
						 <div class="form-group">
        <label for="exampleInputFile">Change profile image:</label>
        <input type="file" name="image">
       
      </div>
      </div>-->
			<button class="btn btn-primary" type="submit" name="update">Update profile</button>  
          
            
          
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 E-learning system . All Rights Reserved | Design by  <a href="" target="_blank">E-learing system</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
	<?php include('includes/navbar.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
