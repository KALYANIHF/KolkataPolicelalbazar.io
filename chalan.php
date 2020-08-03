<?php
include "header.php";
include "connection.php";

?>
<section class="innerpage">
	<div class="container">
		<h2>Chalan List </h2>
		<div class="row">
			<div class="col-sm-5 contactform">
				<div class="row">
					<div class="col-sm-7"><strong>Chalan Details </strong></div>

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
									<td width="32%">Name</td>
									<td width="31%">Chalan No</td>
									<td width="28%">Cause</td>
								</tr>
							</thead>
							<tbody>
								<?php
								error_reporting(0);
								$count = 0;

								$i = 1;

								$results_per_page = 2;

								$count = "SELECT COUNT(*) FROM tbl_fine";
								$res = mysqli_query($conn, $count);

								$number_of_results = mysqli_fetch_array($res)[0];

								$number_of_pages = ceil($number_of_results / $results_per_page);

								if (!isset($_GET['page'])) {
									$page = 1;
								} else {
									$page = $_GET['page'];
								}

								$this_page_first_result = ($page - 1) * $results_per_page;

								$query = "SELECT * FROM tbl_fine LIMIT " . $this_page_first_result . ", " . $results_per_page;
								$res = mysqli_query($conn, $query);

								if ($number_of_results > 0) {
									while ($row = mysqli_fetch_assoc($res)) {
										$count = $count + 1;

								?>
										<tr>
											<td width="9%"><?php echo $count; ?></td>
											<td width="32%"><?php echo $row['f_name']; ?></td>
											<td width="31%"><?php echo $row['chalan_no']; ?></td>
											<td width="28%">
												<?php
												$string = strip_tags($row['reason']);
												if (strlen($string) > 100) {

													// truncate string
													$stringCut = substr($string, 0, 30);
													$endPoint = strrpos($stringCut, ' ');

													//if the string doesn't contain any space then it will cut without word basis.
													$string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
													$string .= '... <a href="" class="descmod" data-toggle="modal"  data-desc="' . $row['fir_description'] . '">Read More</a>';
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

								<li><a href='chalan.php?page=<?php echo $page; ?>'> <?php echo $page; ?> </a></li>

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
				$license_number = $_POST['license_number'];
				$reason = $_POST['reason'];
				$chalan_no = $_POST['chalan_no'];
				$amount = $_POST['amount'];
				$chalan_date = $_POST['chalan_date'];
				$mobile_number = $_POST['mobile_number'];

				$sql = "INSERT INTO tbl_fine (f_name,l_name,license_number,reason,chalan_no,amount,chalan_date,mobile_number) VALUES ('$f_name','$l_name','$license_number','$reason','$chalan_no','$amount','$chalan_date','$mobile_number')";

				//echo $sql; die();

				if ($conn->query($sql) === true) {
					//echo"New record created successfully";
					header("location:chalan.php");
				} else {
					echo "ERROR:" . $sql . "<br>" . $conn->error;
				}
				$conn->close();
			}
			?>
			<div class="col-sm-7">
				<h4>Chalan Form</h4>
				<form name="addfir" method="post" action="chalan.php">
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
						<div class="col-sm-4">
							<div class="form-group">
								<input type="text" placeholder="License Number" class="form-control" type="text" id="text-1" name="license_number">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="case cause" type="text" id="text-1" name="reason"></textarea>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="text" placeholder="Chalan Number" class="form-control" type="text" id="text-1" name="chalan_no">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="text" placeholder="Amount" class="form-control" type="text" id="text-1" name="amount">
							</div>
						</div>

						<div class=" col-sm-6">
							<div class="form-grup">
								<label class="input-label" for="text-1">
									<h6>Chalan Date:</h6>
								</label>
								<input type="date" id="" placeholder="Chalan Date" class="t_box i-calender" name="chalan_date">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" placeholder="Mobile Number" class="form-control" type="text" id="text-1" name="mobile_number">
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