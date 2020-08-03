<?php
include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';
error_reporting(0);
include 'left.php';
?>
<div class="r_pan">
	<div class="row">
		<div class="col-8 dash_btn_group">

			<div class="btn_btx">
				<span>
					<img src="img/traffic.png" alt="TRAFFIC CHALAN" onClick="window.location.href='trafficdashboard.php'">
					<h4><strong>TRAFFIC CHALAN</strong></h4>
				</span>
			</div>
			<a href="firdashboard.php">
				<div class="btn_btx">
					<span>
						<img src="img/fir.png" alt=" FIR " height=120px width=120px>
						<h4><strong>FIR</strong></h4>
					</span>
				</div>
			</a>

			<div class="btn_btx">
				<span>
					<img src="img/mp.png" alt="MISSING PERSON" onClick="window.location.href='missingdashboard.php'">
					<h4><strong> MISSING PERSON</strong></h4>
				</span>
			</div>

			<div class="btn_btx">
				<span>
					<img src="img/criminal.png" alt="ONLINE APPLICATION" height=120 width=120 onClick="window.location.href='appdashboard.php'">
					<h4> <b> ONLINE APPLICATION </b> </h4>
				</span>
			</div>

			<div class="btn_btx">
				<span>
					<img src="img/pujo.png" alt="PUJO PERMISSION" onClick="window.location.href='pujodashboard.php'">
					<h4> <b> PUJO PERMISSION </b> </h4>
				</span>
			</div>

			<?php if ($_SESSION['type'] == 'A') { ?>
				<div class="btn_btx">
					<span>
						<img src="img/stuff.png" alt="MANAGE STUFF" onClick="window.location.href='stuffdashboard.php'">
						<h4> <b> MANAGE STAFF </b> </h4>
					</span>
				</div>

			<?php } ?>
		</div>

		<div class="col-4">
			<div class="info_btn marb15">
				<div class="lc"><img src="img/traffic.png"></div>
				<div class="rc">
					<h5> <b> TRAFFIC CHALAN </b> </h5>
					<h1 class="fw8 fc_blue">
						<?php
						error_reporting(0);
						$result = mysqli_query($conn, "SELECT count(*) as total FROM tbl_fine");
						$data = mysqli_fetch_assoc($result);
						echo $data['total'];
						?>
					</h1>
				</div>
			</div>
			<?php if ($_SESSION['type'] == 'A') { ?>
				<div class="info_btn marb15">
					<div class="lc"><img src="img/stuff.png"></div>
					<div class="rc">
						<h5> <b>MANAGE STAFF </b> </h5>
						<h1 class="fw8 fc_blue">
							<?php
							$result = mysqli_query($conn, "SELECT count(*) as total FROM tbl_user");
							$data = mysqli_fetch_assoc($result);
							echo $data['total'];
							?>

						</h1>
					</div>
				</div>
			<?php } ?>
			<div class="info_btn marb15">
				<div class="lc"><img src="img/fir.png"></div>
				<div class="rc">
					<h5> <b> FIR </b></h5>
					<h1 class="fw8 fc_blue">
						<?php
						$result = mysqli_query($conn, "SELECT count(*) as total FROM tbl_fir");
						$data = mysqli_fetch_assoc($result);
						echo $data['total'];
						?>
					</h1>
				</div>
			</div>
			<div class="info_btn marb15">
				<div class="lc"><img src="img/mp.png"></div>
				<div class="rc">
					<h5> <b>MISSING PERSON </b> </h5>
					<h1 class="fw8 fc_blue">
						<?php
						$result = mysqli_query($conn, "SELECT count(*) as total FROM tbl_missing_person");
						$data = mysqli_fetch_assoc($result);
						echo $data['total'];
						?>
					</h1>
				</div>
			</div>

			<div class="info_btn marb15">
				<div class="lc"><img src="img/criminal.png"></div>
				<div class="rc">
					<h5> <b>ONLINE APPLICATION</b> </h5>
					<h1 class="fw8 fc_blue">
						<?php
						$result = mysqli_query($conn, "SELECT count(*) as total FROM tbl_onlineapplication");
						$data = mysqli_fetch_assoc($result);
						echo $data['total'];
						?>
					</h1>
				</div>
			</div>
			<div class="info_btn">
				<div class="lc"><img src="img/pujo.png"></div>
				<div class="rc">
					<h5> <b> PUJO PERMISSION </b> </h5>
					<h1 class="fw8 fc_blue"><?php
										$result = mysqli_query($conn, "SELECT count(*) as total FROM tbl_pujo_permission");
										$data = mysqli_fetch_assoc($result);
										echo $data['total'];
										?>
					</h1>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
include 'footer.php';
?>

</html>