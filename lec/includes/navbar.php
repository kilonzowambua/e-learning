<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    
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
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <?php echo $row->fname;?> <?php echo $row->lname;?>
                </a>
            </div>
          <ul class="nav">
                <li>
                    <a href="lec-dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="lec-profile.php">
                        <i class="pe-7s-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
                <!--
                <li>
                    <a href="lec-profile-update.php">
                        <i class="pe-7s-user"></i>
                        <p>Update My Profile</p>
                    </a>
                </li>-->
                <li>
                    <a href="lec-view-students.php">
                        <i class="pe-7s-users"></i>
                        <p>My Students</p>
                    </a>
                </li>
                <li>
                    <a href="lec-upload-questions.php">
                        <i class="pe-7s-note2"></i>
                        <p>Assignments/Cats</p>
                    </a>
                </li>
                <li>
                    <a href="lec-download-answers.php">
                        <i class="pe-7s-download"></i>
                        <p>Download Answers</p>
                    </a>
                </li>
                <li>
                    <a href="lec-upload-results.php">
                        <i class="pe-7s-upload"></i>
                        <p>Upload Results</p>
                    </a>
                </li>
                
            </ul>
            </div>
    </div>
    <?php }?>