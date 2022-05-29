<?php
require 'dbcon.php';

if (isset($_POST['save'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$id_number = $_POST['id_number'];
	$age = $_POST['Age'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	$regnumber = $_POST['reg_number'];
	$date = date("Y-m-d H:i:s");


	$removeAllTemporaryId = $conn->query("DELETE FROM temp") or die($conn->error);
	$query = $conn->query("SELECT * FROM voters WHERE id_number='$id_number'") or die($conn->error);

	$count1 = $query->fetch_array();


	if ($count1 == 0) {
        print_r($_POST);
		if ($password == $password1) {
			$fullname = $firstname . $lastname;

			$conn->query("INSERT INTO voters(id_number, password, firstname, lastname, gender, Age, status, date, reg_number) VALUES('$id_number', '" . md5($password) . "','$firstname','$lastname', '$gender', '$age','Unvoted', '$date', '$regnumber')");
			$conn->query("INSERT INTO voters(id_number, password, firstname, lastname, gender, Age, status, date, reg_number) VALUES('$id_number', '" . md5($password) . "','$firstname','$lastname', '$gender', '$age','Unvoted', '$date', '$regnumber')");
?>
			<script>
				// alert('Successfully Registered');
				// window.location = '../voters.php';
			</script>
		<?php
		} else {
		?>
			<script>
				alert('Your Passwords Did Not Match');
				// window.location = 'index.php';
			</script>
		<?php
		}
	} else {
		?>
		<script>
			alert('ID Already Registered');
			// window.location = '../voters.php';
		</script>
<?php
	}
}
?>