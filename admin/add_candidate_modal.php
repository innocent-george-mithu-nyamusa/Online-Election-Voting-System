<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Candidate</center>
						</div>
					</div>
				</h4>
			</div>


			<div class="modal-body">
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Position</label>
						<select class="form-control" name="position">
							<option selected disabled>Select Candidate Group</option>
							<option value="finance_director">Finance Director</option>
							<option value="chairman">Chairman</option>
							<option value="secretary">Secretary</option>
							<option value="secretary_general">Secretary General</option>
							<option value="president">President</option>
						</select>
					</div>

					<div class="form-group">
						<label>Faculty</label>
						<select class="form-control" name="faculty">
							<option selected disabled>Select Candidate Faculty</option>
							<?php
							require 'dbcon.php';

							$stmt = $conn->query("SELECT * FROM faculty");

							while ($value = $stmt->fetch_array()) {
							?>
								<option value="<?php echo $value["faculty_id"]; ?>"><?php echo $value["faculty_name"]; ?></option>

							<?php
							}
							?>
						</select>
					</div>

					<div class="form-group">
						<label>Party </label>
						<select class="form-control" name="party">
							<option selected disabled>Select Candidate Party</option>
							<option value="independent">Independent</option>
							<option value="zicosu">Zicosu</option>
							<option value="zinasu">Zinasu</option>
						</select>
					</div>

					<div class="form-group">
						<label>Firstname</label>
						<input class="form-control" type="text" name="firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Lastname</label>
						<input class="form-control" type="text" name="lastname" placeholder="Please enter lastname" required="true">
					</div>

					<div class="form-group">
						<label>Age</label>
						<input type="number" class="form-control" name="Age">

					</div>

					<div class="form-group">
						<label>Gender</label>
						<select class="form-control" name="gender">
							<option></option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>


					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" required>
					</div>
					<button name="save" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>




			<?php
			require_once 'dbcon.php';

			if (isset($_POST['save'])) {
				$position = $_POST['position'];
				$party = $_POST['party'];
				$faculty = $_POST['faculty'];
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$age = $_POST['Age'];
				$gender = $_POST['gender'];
				$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$image_name = addslashes($_FILES['image']['name']);
				$image_size = getimagesize($_FILES['image']['tmp_name']);

				move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
				$location = "upload/" . $_FILES["image"]["name"];


				$conn->query("INSERT INTO candidate(position,party,firstname,lastname,Age,gender,img,faculty)values('$position','$party','$firstname','$lastname','$age','$gender','$location', '$faculty')") or die($conn->error);
			}
			?>
		</div>

		<!-- /.modal-content -->

	</div>

	<!-- /.modal-dialog -->

</div>