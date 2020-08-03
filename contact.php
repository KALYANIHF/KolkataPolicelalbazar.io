<?php
include "header.php";
include 'connection.php';
?>
<section class="innerpage contactpage">
	<div class="container">
		<h2>Contact Us</h2>
		<div class="row">
			<div class="col-sm-5 contactform">
				<h3>KOLKATA POLICE</h3>

				<p> District - Kolkata ,<br />
					Pin - 700 001.</p>

				kolkata Police Elder Line: <strong>1234</strong><br>
				Traffic Whatsapp Helpline: <strong>8454999999</strong><br>
				Medical Help Line: <strong>03222-275764,275102</strong> <br>
				District Police: <strong>03222-275609</strong><br>
				Child Help Line: <strong>1098</strong><br>
				Alert Citizen: <strong>103</strong>


				<p><strong>Follow Us on :&nbsp;&nbsp;</strong><a href="#"><img src="public/assets/frontend/images/facebook.png" alt=""></a>
					<a href="#"><img src="public/assets/frontend/images/twitter.png" alt=""></a>
					<a href="#"><img src="public/assets/frontend/images/youtube.png" alt=""></a>
				</p>
			</div>
			<div class="col-sm-7">
				<h4>Connect with Us</h4>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" placeholder="Name" class="form-control">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" placeholder="Email Address" class="form-control">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<select class="form-control">
								<option>Select Police Station</option>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="text" placeholder="Phone Number" class="form-control">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<select class="form-control">
								<option>Select Feedback</option>
								<option>General Feedback</option>
								<option>Case Feedback</option>
								<option>Traffic Feedback</option>
							</select>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<textarea class="form-control">Message</textarea>
						</div>
					</div>
					<div class="col-sm-12 button">
						<button type="submit" class="submitbutt">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<?php
include "footer.php";
?>