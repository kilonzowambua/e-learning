<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>
<?php
if(isset($_POST['add']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $national_id=$_POST['national_id'];
    $gender=$_POST['gender'];
    $lec_no=$_POST['lec_no'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $bio=$_POST['bio'];
    
    $course=$_POST['course'];
    $pic=$_FILES["pic"]["name"];
      move_uploaded_file($_FILES["pic"]["tmp_name"],"img/profile_pic/".$_FILES["pic"]["name"]);
		$query="insert into lec (fname, mname, lname, national_id,gender,lec_no,phoneno,email,password,bio,course,pic) values(?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('ssssssssssss',$fname,$mname,$lname,$national_id,$gender, $lec_no,$phoneno,$email,$password,$bio,$course,$pic);
$stmt->execute();
echo"<script>alert('Lectarer account Successfully created');</script>";
}
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Student <i class="fa fa-angle-right"></i>Add student</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">First name</label>
              <input type="text" name="fname"id="firstname"  required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Middle name</label>
              <input type="text" name="mname" id="middlename"required="">
            
            </div>

            <div class=<div class="col-md-6 form-group1 form-last">
              <label class="control-label">Lastname</label>
              <input type="text" name="lname" id="lastname" required="">
            </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">National id</label>
              <input type="text" name="national_id" id="national_id"required="">
            </div>
            
            
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Gender</label>
              <input type="text" name="gender" id="gender"required="">
            </div>
           
            
            
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Lectarer number</label>
              <input type="text" name="lec_no" id="lec_no"required="">
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Phone no</label>
              <input type="text" name="phoneno" id="phoneno"required="">
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" name="email" id="email"required="">
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Password</label>
              <input type="text" name="password" id="password"required="">

            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Bio</label>
              <input type="text" name="bio" id="bio"required="">
            </div>

            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Course</label>
              <input type="text" name="course" id="course"required="">
            </div>
            <div class="clearfix"> </div>
          <div class="form-group">
        <label for="exampleInputFile">Upload image:</label>
        <input type="file" name="pic" id="pic">
            </div>
             
           
           
            
            <div class="col-md-12 form-group">
              <button type="submit" name="add" class="btn btn-primary">Add lecturer</button>
              
          <div class="clearfix"> </div>
        </form>
        </div>

</div>
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
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>s