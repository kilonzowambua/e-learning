<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>
<?php
  $id=$_GET['id'];
if(isset($_POST['update']))
{
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$course=$_POST['course'];
$password=$_POST['password'];
$phoneno=$_POST['phoneno'];
$national_id=$_POST['national_id'];
$gender=$_POST['gender'];

//$pic=$_FILES["dpic"]["name"];
//move_uploaded_file($_FILES["dpic"]["tmp_name"],"img/dpic/".$_FILES["dpic"]["name"]);
//$post=$_POST['post'];
//$phoneno=$_POST['phoneno'];
//$email=$_POST['email'];
//$address=$_POST['address'];
//$username=$_POST['username'];
//$bio=$_POST['bio'];
//$password=md5($_POST['password']);
//$passwordconf=md5($_POST['passwordconf']);
//$date = date('d-m-Y h:i:s', time());
$query="update lec set fname=?, mname=?,lname=?,email=?, course=?, password=?, phoneno=? ,national_id=? ,gender=? where id=?";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('sssssssssi', $fname,$mname,$lname,$email,$course,$password,$phoneno,$national_id,$gender,$id);
$stmt->execute();
echo"<script>alert('Lectarers Details Has Been Updated Successfully');</script>";
}
?>
<ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="index.php">Lectarer</a> Manage lectarer <i class="fa fa-cog">View Lectarer Details</i> 
                </ol>
               <div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Lectarer account</h2>
         <div class="profile_img">	
												<span> <img src="img/profile_pic/<?php echo $row->pic;?>" class="img-rectangle" width="100"></span> 
                  
                </div>
               
                <?php	
                $id=$_GET['id'];
                $ret="select * from lec where id=?";
                
                $stmt= $conn->prepare($ret) ;
                 $stmt->bind_param('i',$id);
                 $stmt->execute() ;//ok
                 $res=$stmt->get_result();
                 //$cnt=1;
                   while($row=$res->fetch_object())
                  {
                    ?>
 		<form method="post">
         
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" class="form-control"  name="fname" id="exampleInputEmail1" placeholder="<?php echo $row->fname;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Middle name</label>
    <input type="text" class="form-control" name="mname" id="exampleInputPassword1" placeholder="<?php echo $row->mname;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" placeholder="<?php echo $row->lname;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="<?php echo $row->email;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">course</label>
    <input type="text" class="form-control" name="course" id="exampleInputEmail1" placeholder="<?php echo $row->course;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input type="password" class="form-control"  name="password"id="exampleInputPassword1" placeholder="<?php echo $row->password;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone number</label>
    <input type="text" class="form-control"name="phoneno"  id="exampleInputEmail1" placeholder="<?php echo $row->phoneno;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">National id</label>
    <input type="readonly" class="form-control" name="national_id"  id="exampleInputPassword1" placeholder="<?php echo $row->national_id;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gender</label>
    <input type="text" class="form-control"  name="gender" id="exampleInputPassword1" placeholder="<?php echo $row->gender;?>">
  </div>
  <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="update" Value="Update lectarers accounts" class="btn btn-warning ">
          </div>
        
  </form>
  <?php } ?>
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
      