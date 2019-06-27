<?php include('includes/config.php'); ?>
<?php include('includes/header.php')?>
<?php include('includes/navbar.php')?>
<?php
$Stdid=$_SESSION['stdid'];
					
                    $ret="SELECT * FROM student WHERE stdid= '$_SESSION[stdid]'";
                     $stmt= $conn->prepare($ret) ;
                     //$stmt->bind_param('i',$aid);
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
                                                <a href="#">Provision of results</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Results</li>
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
                    <h1>Results sheat</h1>
                    <iframe src="../results/<?php echo $row->results;?>" width="100%" height="500px">
    </iframe>
                   </div>
                   </div>
                                 <?php include('includes/footer.php')?>
                           <?php } ?>