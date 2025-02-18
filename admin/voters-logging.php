<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Votes Tracking</h3>
               
				<hr/>
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Voter ID</th>
                                            <th>Purpose </th>
                                            <th>Candidate Id</th>
                                            <th>Voters Id</th>
                                            <th>Vote Changed At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require 'dbcon.php';
											
											$query = $conn->query("SELECT * FROM updated_votes ORDER BY vote_changed_at DESC");
											while($row1 = $query->fetch_array()){
										?>
											<tr>
												<td><?php echo $row1 ['vote_id'];?></td>
												<td><?php echo $row1 ['vote_update_purpose'];?></td>
												<td><?php echo $row1 ['candidate_id'];?></td>
												<td><?php echo $row1 ['voters_id'];?></td>
												<td><?php echo $row1 ['vote_changed_at'];?></td>
											</tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>
	    <?php include ('footer.php');?>

</body>

</html>

