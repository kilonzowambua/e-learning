<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>
<?php


if(isset($_POST['submit']))
{
$upload_date=$_POST['upload_date'];
$s_date=$_POST['s_date'];
$questions =$_FILES["attachment"]["name"];
$type=$_POST['type'];
$coursename=$_POST['coursename'];
move_uploaded_file($_FILES["attachment"]["tmp_name"],"../questions/".$_FILES["attachment"]["name"]);
$query="insert into qns(upload_date, s_date, questions,type,coursename) values(?, ?,?,?,?)";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('sssss',  $upload_date, $s_date, $questions, $type,$coursename);
$stmt->execute();
echo"<script>alert('Success! Summited Questions ');</script>";
}
?>
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
                
                $stmt= $conn->prepare($ret) ;
                 
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
      <option >CAT</option>
      <option >assignment</option>
      <option >Exam paper</option>
      
      
      
      
    </select>
  </div>
  </div>
                                            
                                    </div>                                
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Upload Questions in (docx and pdf)</label>
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
      