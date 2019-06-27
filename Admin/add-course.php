<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>
<?php
if(isset($_POST['add']))
{
    $coursename=$_POST['coursename'];
    $courseduration=$_POST['courseduration'];
    
		$query="insert into course(coursename,courseduration) values(?,?)";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('ss',$coursename,$courseduration,);
$stmt->execute();
echo"<script>alert('Course Successfully added');</script>";
}
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Courses<i class="fa fa-angle-right"></i>Add course</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">course name</label>
              <input type="text" name="coursename"id="firstname"  required="">
            </div>
            <br>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Course duration</label>
              <input type="text" name="courseduration" id="middlename"required="">
            
            </div>

          <!--  <div class=<div class="col-md-6 form-group1 form-last">
              <label class="control-label">Lastname</label>
              <input type="text" name="lastname" id="lastname" required="">
            </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" name="email" id="email"required="">
            </div>
            
            
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" name="phone" id="phone"required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Course</label>
              <input type="text" name="course" id="course"required="">
            </div>
            <div class="clearfix"> </div>
          <div class="form-group">
        <label for="exampleInputFile">Upload image:</label>
        <input type="file" name="image" id="image">
            </div>-->
             
           
           
            
            <div class="col-md-12 form-group">
              <button type="submit" name="add" class="btn btn-primary">Add course</button>
              
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
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
</html>