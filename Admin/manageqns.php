<?php include('includes/header.php');?>
<?php include('../includes/config.php');?>
<?php
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from qns where id=?";
		$stmt= $conn->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Question is Successfully Deleted');</script>" ;
}
?>
<h3>ALL CLASSWORKS</h3>

				  <table id="table-no-resize">
					<thead>
					  <tr>
                          <th>Question id</th>
						<th>Classwork</th>
						<th>Course</th>
						<th>Type</th>
						<th>Date of upload</th>
						<th>Submittion date</th>
                       
                        <th>Actions</th>
        
                        
					  </tr>
					</thead>
					
					<tbody>
					
                    <?php
                    
                   $ret="SELECT * FROM qns ";
                    $stmt= $conn->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
					  <tr>
                      
                        <td><?php echo $row->id;?></td>
                        <td><?php echo $row->questions;?></td>
                        <td><?php echo $row->coursename;?></td>
                        <td><?php echo $row->type;?></td>
						<td><?php echo $row->upload_date;?></td>
						<td><?php echo $row->s_date;?></td>
						
					
                        <td>

<a href='downloadqns.php?id=<?php echo $row->id;?>'><button class="btn btn-success btn-xs"><i class="fa fa-download"></i></button></a>
 
  <a href='manageqns.php?del=<?php echo $row->id;?>' onClick= "return confirm('Do you want to delete');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
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
</html>
      