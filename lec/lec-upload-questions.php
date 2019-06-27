<!doctype html>
<html lang="en">
<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$upload_date=$_POST['upload_date'];
$s_date=$_POST['s_date'];
$questions =$_FILES["attachment"]["name"];
$type=$_POST['type'];
$coursename=$_POST['coursename'];
move_uploaded_file($_FILES["attachment"]["tmp_name"],"../questions/".$_FILES["attachment"]["name"]);
$query="insert into qns(upload_date, s_date, questions,type,coursename) values(?, ?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssss',  $upload_date, $s_date, $questions, $type,$coursename);
$stmt->execute();
echo"<script>alert('Success! Summited Questions ');</script>";
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
                                <h4 class="title">Upload classwork:</h4>
                            </div>
                            <div class="content">
                                <form method='post'  enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Upload Date</label>
                                                <input type="text" class="form-control"  name='upload_date' value="<?php echo date ('D');?> <?php echo date ('M');?> <?php echo date ('Y');?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Submission Date</label>
                                                <input type="date" class="form-control"  name= "s_date" >
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
    <label for="exampleFormControlSelect1">select course</label>
    <select class="form-control" id="exampleFormControlSelect1" name="coursename">
    <?php	
                $ret="select * from course";
                
                $stmt= $mysqli->prepare($ret) ;
                 
                 $stmt->execute() ;//ok
                 $res=$stmt->get_result();
                 $cnt=1;
                   while($row=$res->fetch_object())
                  {
                    ?>
      <option ><?php echo $row->coursename;?></option>
      <?php   $cnt= $cnt +1; } ?>
      
    </select>
  </div>
  </div>
  <div class="col-md-3">
                                        <div class="form-group">
    <label for="exampleFormControlSelect1">select type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
    <option >Course note</option>
    <option >assignment</option>
      <option >CAT</option>
      <option >Exam paper</option>
      
      
      
    </select>
  </div>
  </div>
                                            
                                    </div>                                
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Upload classwork in (pdf)</label>
                                                <input type="file" class="btn btn-success" name="attachment">
                                            </div>
                                        </div>
                                   <input type="submit" class="btn btn-info btn-fill pull-right" name='submit' value="Submit">
                                   <div class="clearfix"></div>
                                </form>
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
