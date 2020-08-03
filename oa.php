<?php
include "header.php";
include "connection.php";

?>


<section class="innerpage">
	<div class="container">
		<h2>Application List </h2>
		<div class="row">
			<div class="col-sm-5 contactform">
				<div class="row">
					<div class="col-sm-7"><strong>Online Application Details </strong></div>

				</div>
				<div>
					<div class="topsearch">
						<form class="sr-w" method="POST">
							<input placeholder="Search" type="text" class="form-control" name="valueToSearch">
						</form>
					</div>
					<div class="table-responsive tablesec">
						<table width="100%" border="0">
							<thead>
								<tr>
									<td width="9%">SL</td>
									<td width="32%">Gender</td>
									<td width="31%">Name</td>
									<td width="28%">Cause</td>
								</tr>
							</thead>
							<tbody>
								<?php
								error_reporting(0);
								$count = 0;

								$i = 1;

								$results_per_page = 2;

								$count = "SELECT COUNT(*) FROM tbl_onlineapplication";
								$res = mysqli_query($conn, $count);

								$number_of_results = mysqli_fetch_array($res)[0];

								$number_of_pages = ceil($number_of_results / $results_per_page);

								if (!isset($_GET['page'])) {
									$page = 1;
								} else {
									$page = $_GET['page'];
								}

								$this_page_first_result = ($page - 1) * $results_per_page;

								$query = "SELECT * FROM tbl_onlineapplication LIMIT " . $this_page_first_result . ", " . $results_per_page;
								$res = mysqli_query($conn, $query);

								if ($number_of_results > 0) {
									while ($row = mysqli_fetch_assoc($res)) {
										$count = $count + 1;

								?>
										<tr>
											<td width="9%"><?php echo $count; ?></td>
											<td width="32%"><?php echo $row['gender']; ?></td>
											<td width="31%"><?php echo $row['f_name']; ?></td>
											<td width="28%">
												<?php
												$string = strip_tags($row['cause']);
												if (strlen($string) > 100) {

													// truncate string
													$stringCut = substr($string, 0, 30);
													$endPoint = strrpos($stringCut, ' ');

													//if the string doesn't contain any space then it will cut without word basis.
													$string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
													$string .= '... <a href="" class="descmod" data-toggle="modal"  data-desc="' . $row['cause'] . '">Read More</a>';
												}
												echo $string;

												?>
											</td>
										</tr>
										</tr>

								<?php
										$i++;
									}
								} else {
									echo "<tr><td colspan='3'><center>No Records Found!</center></td></tr>";
								}

								?>


							</tbody>
						</table>



						<ul class="pagination right rightpagi">
							<?php

							for ($page = 1; $page <= $number_of_pages; $page++) {

							?>

								<li><a href='oa.php?page=<?php echo $page; ?>'> <?php echo $page; ?> </a></li>

							<?php

							}

							?>
						</ul>
					</div>
					<nav aria-label="Page navigation">
						<ul class="pagination right rightpagi">

				</div>
			</div>
			<?php
			error_reporting(0);
			if ($_POST['addaction'] == 'AddRec') {
				$f_name = $_POST['f_name'];
				$l_name = $_POST['l_name'];
				$guardians_name = $_POST['guardians_name'];
				$gender = $_POST['gender'];
				$phone_number = $_POST['phone_number'];
				$y_address = $_POST['y_address'];
				$cause = $_POST['cause'];
				$amount = $_POST['amount'];
				$f_description = $_POST['f_description'];

				$sql = "INSERT INTO tbl_onlineapplication (f_name,l_name,guardians_name,gender,phone_number,y_address,cause,amount,f_description) VALUES ('$f_name','$l_name','$guardians_name','$gender','$phone_number','$y_address','$cause','$amount','$f_description')";

				//echo $sql; die();

				if ($conn->query($sql) === true) {
					//echo"New record created successfully";
					header("location:oa.php");
				} else {
					echo "ERROR:" . $sql . "<br>" . $conn->error;
				}
				$conn->close();
			}
			?>
			<div class="col-sm-7">
				<h4>Online Form</h4>
				<form name="addfir" method="post" action="oa.php">
					<input type="hidden" name="addaction" value="AddRec">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" placeholder="First Name." class="form-control" type="text" id="text-1" name="f_name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" placeholder="Last Name" class="form-control" type="text" id="text-1" name="l_name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" placeholder="Guardian's Name" class="form-control" type="text" id="text-1" name="guardians_name">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<select class="form-control" type="text" id="text-1" name="gender">
									<option>MALE</option>
									<option>FEMALE</option>
									<option>OTHER</option>

								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" placeholder="Mobile_number" class="form-control" type="text" id="text-1" name="phone_number">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Your Address" type="text" id="text-1" name="y_address"></textarea>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Cause" type="text" id="text-1" name="cause"></textarea>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="text" placeholder="Amount" class="form-control" type="text" id="text-1" name="amount">
							</div>
						</div>


						<div class="col-sm-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Incident Description" type="text" id="text-1" name="f_description"></textarea>

								<br>
								<div class="col-sm-12 button">
									<input type="submit" class="submitbutt" id="submit" value="Submit" name="submit">
								</div>
							</div>
						</div>
					</div>
			</div>

		</div>
	</div>
	<div class="modal fade" id="descModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>
				<div class="modal-body">
					<p id="desc"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


</section>
<?php
include "footer.php";
?>