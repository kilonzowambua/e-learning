<?php include('includes/config.php'); ?>
<?php include('includes/header.php')?>
<?php include('includes/navbar.php')?>
<?php
$Stdid=$_SESSION['stdid'];

$id=$_GET['id'];
                    $ret="SELECT * FROM qns WHERE id= ?";
                     $stmt= $conn->prepare($ret) ;
                     $stmt->bind_param('i',$id);
                     $stmt->execute() ;//ok
                     $res=$stmt->get_result();
                     
                     while($row=$res->fetch_object())
                           {
                               ?>
                                 <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Classwork</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">class note</li>
                                        </ul>
                                    </div>
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h1>Course note</h1>
    <iframe src="../questions/<?php echo $row->questions;?>" width="100%" height="500px">
    </iframe>
                   </div>
                   </div>
                                 <?php include('includes/footer.php')?>
                           <?php } ?>