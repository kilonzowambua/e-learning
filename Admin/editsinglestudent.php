<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>

<?php 
$stdid=$_GET['stdid'];
if(isset($_POST['update']))
{

$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$course=$_POST['course'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$admissiondate=$_POST['admissiondate'];

//$password=md5($_POST['password']);
//$passwordconf=md5($_POST['passwordconf']);
//$date = date('d-m-Y h:i:s', time());
$query="update student set firstname=?, middlename=?, lastname=?, email=?, course=?, password=?, phone=?, admissiondate=? where stdid=?";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('ssssssssi', $firstname, $middlename, $lastname, $email, $course, $password, $phone,  $admissiondate, $stdid);
$stmt->execute();
echo"<script>alert('student Account  Has Been Updated Successfully');</script>";
}
?>
<?php	
	$id=$_GET['stdid'];
	$ret="select * from student where stdid=?";
	
	$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Student</a> Manage student <i class="fa fa-cog">Edit student</i> 
                </ol>
                <div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Student account</h2>
         <div class="profile_img">	
												<span> <img src="img/profile_pic/<?php echo $row->image;?>" class="img-rectangle" width="100"></span> 
                  
                </div>
                <form method='post' action='#'>
         
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" class="form-control" name="firstname" placeholder="<?php echo $row->firstname;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Middle name</label>
    <input type="text" class="form-control" name="middlename" placeholder="<?php echo $row->middlename;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    <input type="text" class="form-control" name="lastname" placeholder="<?php echo $row->lastname;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="<?php echo $row->email;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">course</label>
    <input type="text" class="form-control" name="course" placeholder="<?php echo $row->course;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input type="password" class="form-control" name="password" placeholder="<?php echo $row->password;?>">
  </div>
  <div class="form-group">
    <label for="exampleInpu">Phone number</label>
    <input type="text" class="form-control" name="phone" placeholder="<?php echo $row->phone;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Admission date</label>
    <input type="text" class="form-control" name="admissiondate" placeholder="<?php echo $row->admissiondate;?>">
  </div>
  <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="update" Value="Update student accounts" class="btn btn-warning ">
          </div>
									</form>
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
</html>
      <?php } ?>  
