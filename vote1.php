<?php include('head.php'); ?>

<body>

    <div id="wrapper">


        <?php include('view_banner.php'); ?>

        <div id="page-wrapper">

            <heading class="menue-select">
                <center>
                    <select onchange="page(this.value)">
                        <option disabled selected>Select Candidate Group</option>
                        <option value="pm_vote.php" name="pm">
                            President
                        </option>
                        <option value="finance.php" name="pm">
                            Finance Director
                        </option>
                        <option value="chairman.php" name="pm">
                            Chairman
                        </option>
                        <option value="cm_vote.php">Secretary General</option>
                        <option value="mla_vote.php">Independent</option>
                    </select>
                </center>

            </heading>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
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