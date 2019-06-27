<?php
session_start();
include('includes/config.php');

include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];?>

<?php include('includes/head.php')?>
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
                                <h4 class="title">Answers:</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>#</th>
                                    	<th>Name</th>
                                        <th>Email</th>
                                        <th>Answers</th>
                                        <th>Action</th>
                                        </thead>
                                    <tbody>
                                    <?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT * FROM student ";
                    $stmt= $mysqli->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    $cnt=1;
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
                                        <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->lastname;?></td>
                                        <td><?php echo $row->email;?></td>
                                        <td><?php echo $row->ans;?></td>
                                        <td><a href="../answers/<?php echo $row->ans;?>"><button class="btn btn-primary btn-xs"><i class="pe-7s-download"></i></i></button></a></td>
                                        </tr>
                                    </tbody>
                                    <?php $cnt=$cnt+1; } ?>
                                </table>

                            </div>
                        </div>
                    </div>


                    
                </div>
            </div>
        </div>
    <?php include('includes/footer.php')?>


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
