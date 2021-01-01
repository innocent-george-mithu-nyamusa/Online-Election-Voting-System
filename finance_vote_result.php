<?php include('head.php'); ?>
<?php include('sess.php'); ?>

<body>
    <?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
        if (isset($_POST['submit'])) {
            if (!isset($_POST['pm_id'])) {
                $_SESSION['pm_id'] = "";
            } else {
                $_SESSION['pm_id'] = $_POST['pm_id'];
            }
            if (!isset($_POST['cm_id'])) {
                $_SESSION['cm_id'] = "";
            } else {
                $_SESSION['cm_id'] = $_POST['cm_id'];
            }

            if (!isset($_POST['ch_id'])) {
                $_SESSION['ch_id'] = "";
            } else {
                $_SESSION['ch_id'] = $_POST['ch_id'];
            }

            if (!isset($_POST['finance_id'])) {
                $_SESSION['finance_id'] = "";
            } else {
                $_SESSION['finance_id'] = $_POST['finance_id'];
            }

            if (!isset($_POST['mla_id'])) {
                $_SESSION['mla_id'] = "";
            } else {
                $_SESSION['mla_id'] = $_POST['mla_id'];
            }
        }
        ?>
    </div>
    <center>
        <div class="col-lg-8" style="margin-left:25%; margin-right:25%;">
            <div class="alert alert-success">
                <div class="panel-heading">
                    <center>Finance Director</center>
                </div>
                <br />
                <?php
                if (!$_SESSION['finance_id']) {
                } else {
                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[finance_id]'")->fetch_array();
                    echo $fetch['firstname'] . " " . $fetch['lastname'] . " " . "<img src = 'admin/" . $fetch['img'] . "' style = 'height:80px; width:80px; border-radius:500px;' />";
                }
                ?>
            </div>

            <br />
        </div>
    </center>
    <div class="modal-body">
        <p>
            <center>Are you sure you want to submit your Votes? </center>
        </p>
    </div>

    <div class="modal-footer">
        <center>
            <a href="finance_submit_vote.php"><button type="submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
            <a href="finance.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
        </center>
    </div>
    <!-- /.modal-content -->

    <!-- /.modal-dialog -->


</body>

<?php include('script.php');
include('footer.php'); ?>

</html>