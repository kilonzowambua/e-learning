<?php
session_start();
include('includes/config.php');
//date_default_timezone_set('Africa /Nairobi');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['update']))
{
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$results =$_FILES["attachment"]["name"];
move_uploaded_file($_FILES["attachment"]["tmp_name"],"../results/".$_FILES["attachment"]["name"]);
$query="update student set firstname=?, middlename=?, lastname=?, email=?,  results=? where stdid=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssi',  $firstname, $middlename, $lastname, $email, $results, $aid);
$stmt->execute();
echo"<script>alert('Success! Uploaded Results');</script>";
}
?>
<?php include("includes/head.php")?>
<body>

<div class="wrapper">
    <?php include("includes/navbar.php")?>

    <div class="main-panel">
		<?php include("includes/mobile-nav.php")?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Upload results:</h4>
                            </div>
                            <div class="content">
    <?php	
	$id=$_GET['id'];
	$ret="select * from  student where stdid=?";
	
	$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                <form method='post'  enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control"  name='firstname' value="<?php echo $row->firstname;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control"  name='middlename' value="<?php echo $row->middlename;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control"  name='lastname' value="<?php echo $row->lastname;?>">
                                            </div>
                                        </div>
                                        
                                        
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control"  name='email' value="<?php echo $row->email;?>">
                                            </div>
                                        </div>
                                                               
                                    </div> 
                                    
                                                                    
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Upload Results  (pdf only)</label>
                                                <input type="file" class="btn btn-success" name="attachment">
                                            </div>
                                        </div>
                                   <input type="submit" class="btn btn-info btn-fill pull-right" name='update' value="Submit">
                                   <div class="clearfix"></div>
                                </form>
      <?php }?>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

<?php include("includes/footer.php")?>

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
