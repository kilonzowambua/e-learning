<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>
<?php
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from student where stdid=?";
		$stmt= $conn->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Student account is Successfully Deleted');</script>" ;
}
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Student</a>  <i class="fa fa-cog">Manage students</i> 
            </ol>
            <h3>ALL OUR STUDENTS</h3>

				  <table id="table-no-resize">
					<thead>
					  <tr>
                          <th>Image</th>
						<th>Stdno</th>
						<th>First name</th>
						<th>Middle name</th>
						<th>Last name</th>
						<th>Course</th>
                        <th>E-mail</th>
                        <th>Date/Time of admission</th>
                        <th> Action </th>
					  </tr>
					</thead>
					<tbody>
                    <?php
                    $userid=$_SESSION['userid'];
                   $ret="SELECT * FROM student ";
                    $stmt= $conn->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
					  <tr>
                      <td><img src="img/profile_pic/<?php echo $row->image;?>" class="img-rectangle" width="100"></td>
                        <td><?php echo $row->stdid;?></td>
                        <td><?php echo $row->firstname;?></td>
                        <td><?php echo $row->middlename;?></td>
                        <td><?php echo $row->lastname;?></td>
						<td><?php echo $row->course;?></td>
						
                        <td><?php echo $row->email;?></td>
                        
						<td><?php echo $row->admissiondate;?></td>
                        <td>

                    <a href='viewsinglestudent.php?stdid=<?php echo $row->stdid;?>'><button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button></a>
                     <a href='editsinglestudent.php?stdid=<?php echo $row->stdid;?>'><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href='managestudent.php?del=<?php echo $row->stdid;?>' onClick= "return confirm('Do you want to delete');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>
					  </tr>
					  
                    </tbody>
                    <?php  } ?>
				  </table>

				 
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