<?php
require_once 'admin/dbcon.php';

if (isset($_POST['login'])) {
	$idno = $_POST['idno'];
	$password = $_POST['password'];

	$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '" . md5($password) . "' && `account` = 'Active' && `status` = 'Unvoted'") or die(mysqli_errno($conn));
	$row = $result->fetch_array();

	$vote_check = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '" . md5($password) . "' && `status` = 'Voted' && `president`= '1' && `secretary`='1' && `secretary_general`='1' && `chairman`='1' && `finance_dierctor`=='1'");
	$numberOfRows = $result->num_rows;

    if(is_bool($vote_check)){
        $voted = 0;
    }

	if ($numberOfRows > 0) {
		session_start();

		$_SESSION['voters_id'] = $row['voters_id'];
		$_SESSION['reg_number'] =  $_POST['reg_number'];

		header('location:vote1.php');
	}

	if ($voted == 1) {
?>
		<script type="text/javascript">
			alert('Sorry You Already Voted')
		</script>
	<?php
	} else if ($voted != 0) {
	?>
		<script type="text/javascript">
			alert('Your account is not Activated')
		</script>
<?php
	}
}
?>