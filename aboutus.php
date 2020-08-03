<?php
include 'connection.php';
error_reporting(0);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$institute = htmlspecialchars($_POST['institute']);
$about = htmlspecialchars($_POST['about']);
if ($conn) {
  $query = "INSERT INTO `company_contact`(`id`, `name`, `email`, `institute_name`, `about_idea`) VALUES ('null','$name','$email','$institute','$about')";
  if (isset($_POST['submit'])) {
    mysqli_query($conn, $query);
    echo '<script>alert("submit sucessfull we will contact you soon")</script>';
  }
} else {
  echo '<script>alert("submit failed please fill all the field")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RR Web_solution</title>
  <link rel="icon" href="/img/rr_web.png" />
  <link rel="stylesheet" href="css1/about.css" />
</head>

<body>
  <header>
    <div class="container">
      <div class="branding">
        <h1>RR Web_solution</h1>
        <img src="img/rr_web.png" height="50px" alt="" />
        <img src="img/rr_web.png" height="45px" alt="" />
        <img src="img/rr_web.png" height="35px" alt="" />
        <img src="img/rr_web.png" height="25px" alt="" />
        <img src="img/rr_web.png" height="20px" alt="" />
        <img src="img/rr_web.png" height="10px" alt="" />
      </div>
    </div>
  </header>
  <section class="main">
    <div class="container">
      <h1>
        Welcome
        <span style="display: block; color: brown;">to</span> Web_solution
      </h1>
    </div>
  </section>
  <section class="contact">
    <div class="container">
      <h2>Contact Us</h2>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-content">
          <div class="value">
            <label for="name">Name</label>
            <input type="text" required name="name" id="name" />
          </div>
          <div class="value">
            <label for="email">Email</label>
            <input type="email" required name="email" id="email" />
          </div>
          <div class="value">
            <label for="institute">Institution Name</label>
            <input type="text" required name="institute" id="institute" />
          </div>
          <div class="value">
            <textarea required placeholder="write about your idea" name="about" id=""></textarea>
          </div>
          <div class="value">
            <button name="submit" type="submit">submit</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <section class="brand">
    <h2>Our-Work</h2>
    <div class="container1">
      <div class="one1">
        <div class="layer">
          <div class="content">
            <a target="_blank" href="https://healthportal3.000webhostapp.com/">click</a>
          </div>
        </div>
      </div>
      <div class="one2">
        <div class="layer">
          <div class="content">
            <a target="_blank" href="https://kalyanihf.github.io/Alphacoder/">click</a>
          </div>
        </div>
      </div>
      <div class="one3">
        <div class="layer">
          <div class="content">
            <a target="_blank" href="">click</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="foot">
    <div class="container">
      <h1>all right reserved &copy; 2020</h1>
    </div>
  </div>
</body>

</html>