<?php

include('head.php');
include('system_api/src/config/db.php');

$db = new db();
$pdo = $db->connect();


?>

<body>

    <div id="wrapper">


        <?php include('view_banner.php'); ?>

        <div id="page-wrapper">

            <heading class="menue-select">
                <center>
                    <select onchange="page(this.value)">
                        <option disabled selected>Select Candidate Group</option>
                        <?php
                        $stmt = $pdo->prepare("SELECT DISTINCT position FROM candidate");
                        $stmt->execute();
                        $allValues = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($allValues as $value) {
                        ?>
                            <option value="candidates/pm.php"><?php echo $value["position"] ?></option>
                        <?php
                        }
                        ?>
                        <!-- <option value="candidates/pm.php">Prime Minister</option>
                        <option value="candidates/cm.php">Chief Minister</option>
                        <option value="candidates/mla.php">MLA</option> -->
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