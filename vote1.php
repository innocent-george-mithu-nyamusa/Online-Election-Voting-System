<?php include('head.php'); ?>
<?php
session_start();
?>
<body>

    <div id="wrapper">

        <?php include('view_banner.php'); ?>

        <div id="page-wrapper">

            <heading class="menue-select">
                <center>

                    <select onchange="page(this.value)">
                        <option >Select Candidate Group</option>

                        <?php if (!isset($_SESSION["pm_id"])) { ?>
                            <option value="pm_vote.php" name="pm">
                                President
                            </option>
                        <?php } ?>

                        <?php if (!isset($_SESSION["finance_id"])) { ?>
                            <option value="finance.php" name="pm">
                                Finance Director
                            </option>
                        <?php } ?>

                        <?php if (!isset($_SESSION["ch_id"])) { ?>
                            <option value="chairman.php" name="pm">
                                Chairman
                            </option>
                        <?php } ?>

                        <?php if (!isset($_SESSION["cm_id"])) { ?>
                            <option value="cm_vote.php">
                                Secretary General
                            </option>
                        <?php } ?>

                        <?php if (!isset($_SESSION["mla_id"])) { ?>
                            <option value="mla_vote.php">
                                Secretary
                            </option>
                        <?php } ?>
                    </select>
                </center>

            </heading>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper --->
    <?php
    include('footer.php');
    ?>

    <script>
        function page(src) {
            window.location = src;
        }
    </script>

</body>

</html>
