<?php
session_start();
include('includes/config.php');
//date_default_timezone_set('Africa /Nairobi');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['update']))
{

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
//$e_address=$_POST['e_address'];
$bio=$_POST['bio'];
$password=sha1($_POST['password']);
$pic=$_FILES["dpic"]["name"];
move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/faces/".$_FILES["dpic"]["name"]);
$query="update lec set fname=?, mname=?, lname=?, email=?, password=?, phoneno=?, bio=?, pic=? where id=?";
$stmt = $mysqli->prepare($query); 
$rc=$stmt->bind_param('ssssssssi', $fname,$mname, $lname, $email, $password, $phoneno, $bio, $pic, $aid);
$stmt->execute();
echo"<script>alert('Success!..Your Profile Has Been Updated');</script>";
}
?>
<?php include("includes/head.php")?>
<body>

<div class="wrapper">
    <?php include("includes/navbar.php")?>

    <div class="main-panel">
		<?php include("includes/mobile-nav.php")?>


        <?php
        $aid=$_SESSION['id'];
      	$ret="select * from lec where id=?";
      	$stmt= $mysqli->prepare($ret) ;
      	$stmt->bind_param('i',$aid);
      	$stmt->execute() ;//ok
      	$res=$stmt->get_result();
      	 //$cnt=1;
      	while($row=$res->fetch_object())
      	  {
      	  	?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $row->fname;?> <?php echo $row->lname;?> `s Profile</h4>
                            </div>
                            <div class="content">
                                <form method='post' action='' enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Institution</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="E-Learning Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Lecturer Number</label>
                                                <input type="text" class="form-control"  name='lec_no' readonly value="<?php echo $row->lec_no;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name='email' placeholder="Email" value='<?php echo $row->email;?>'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name='fname' placeholder="First Name" value="<?php echo $row->fname;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control" name='mname' placeholder="Middle Name" value="<?php echo $row->mname;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name='lname' placeholder="Last Name" value="<?php echo $row->lname;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>National ID Number</label>
                                                <input type="text" class="form-control" name='national_id' readonly  value="<?php echo $row->national_id;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" name="phoneno"  value="<?php echo $row->phoneno;?>">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" name=""  value="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" name="password"  required>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" name='bio' value=""><?php echo $row->bio;?></textarea>
                                            </div>
                                        </div>
                                     
                                        
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Upload Profile Picture</label>
                                                <input type="file" class="btn btn-success" name="dpic">
                                            </div>
                                        </div>

                                    <input type="submit" name='update' class="btn btn-info btn-fill pull-right" value="Update Profile">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/<?php echo $row->pic;?>" alt="..."/>

                                      <h4 class="title"><b><?php echo $row->fname;?> <?php echo $row->mname;?> <?php echo $row->lname;?></b><br />
                                         <small><?php echo $row->email;?></small><br>
                                         <small><?php echo $row->lec_no;?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"><?php echo $row->bio;?>
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            <?php }?>

        <?php include ("includes/footer.php")?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
