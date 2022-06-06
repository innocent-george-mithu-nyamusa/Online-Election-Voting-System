<style type="text/css">
    nav ul li {
        display: inline-block;
        padding-left: 20px;
        padding-bottom: 10px;
    }

    nav ul li:hover {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }
</style>
<div class="text-center text-success animateuse" style="background-color: #40AFF8; font-size:25px;text-align:center; margin-top:-10px; padding-top:20px;">
    <a style="color:white; font-weight:bold; font-size:30px;">   <img src ="img/logoo.png" width="70"> CUT SRC Fingerprint Voting System   <img src ="img/logoo.png" width="70"> </a>

    <nav class="nav-menue">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li><a href="candidate_path.php">Candidates</a></li>
            <li> <a href="register/index.php">Register</a></li>
            <li><a href="voters.php">Voter List</a></li>
            <?php if (isset($_SESSION["voters_id"])) { ?>
                <li><a href="logout.php">Logout</a></li>
            <?php } else { ?>
                <li><a href="login.php">Login</a></li>
            <?php } ?>
        </ul>
    </nav>

</div>
