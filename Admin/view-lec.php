<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>
<h3>ALL OUR LECTURERS</h3>

				  <table id="table-no-resize">
					<thead>
					  <tr>
                          <th>Image</th>
						<th>Lecturers no</th>
						<th>First name</th>
						<th>Middle name</th>
						<th>Last name</th>
						<th>Course</th>
                        <th>E-mail</th>
                        <th>phoneno</th>
						
						<th>Gender</th>
						<th>Biograpy</th>
						<th>National id</th>
        
                        
					  </tr>
					</thead>
					
					<tbody>
					
                    <?php
                    $userid=$_SESSION['userid'];
                   $ret="SELECT * FROM lec ";
                    $stmt= $conn->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
					  <tr>
                      <td><img src="img/profile_pic/<?php echo $row->pic;?>" class="img-rectangle" width="100"></td>
                        <td><?php echo $row->lec_no;?></td>
                        <td><?php echo $row->fname;?></td>
                        <td><?php echo $row->mname;?></td>
                        <td><?php echo $row->lname;?></td>
						<td><?php echo $row->course;?></td>
						<td><?php echo $row->email;?></td>
						<td><?php echo $row->phoneno;?></td>
						
						<td><?php echo $row->gender;?></td>
						<td><?php echo $row->bio;?></td>
						<td><?php echo $row->national_id;?></td>
				
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
</html>