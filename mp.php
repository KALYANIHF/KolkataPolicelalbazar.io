<?php
include 'header.php';
include 'connection.php';
error_reporting(0);
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars(($_POST['lastname']));
$miss_address = htmlspecialchars($_POST['miss_address']);
$gender = htmlspecialchars($_POST['gender']);
$report_add = htmlspecialchars($_POST['report_add']);
$contact_no = htmlspecialchars($_POST['contact_no']);
$description = htmlspecialchars($_POST['description']);
$photo = htmlspecialchars($_POST['photo']);
$miss_date = htmlspecialchars($_POST['miss_date']);
$filename = $_FILES['photo']['name'];
$filepath = $_FILES['photo']['tmp_name'];
$target_dir = "admin/uploads/" . $filename;
if ($conn) {
     $query = "INSERT INTO `tbl_missing_person`(`id`, `f_name`, `l_name`, `gender`, `your_address`, `con_no`, `missing_ads`, `mis_date`, `y_description`, `photo`, `status`) VALUES ('null','$firstname','$lastname','$gender','$report_add','$contact_no','$miss_address','$miss_date','$description','$photo','null')";
     if (isset($_POST['submit'])) {
          mysqli_query($conn, $query);
          move_uploaded_file($filepath, $target_dir);
          echo '<script>alert("your application successfully submited")</script>';
     }
} else {
     echo '<script>alert("something went rong please fill all the fields carefully")</script>';
}
?>
<link rel="stylesheet" href="css1/missperson.css">
<link rel="stylesheet" href="css1/bootstrap3.min.css">
<section class="alpha">
     <div class="container">
          <div class="mass">
               <h1>Missing person complient dashbord</h1>
          </div>
     </div>
</section>
<section class="form-fill">
     <h2>fill the form bellow</h2>
     <div class="container1">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
               <fieldset>
                    <div class="form-group">
                         <label for="firstname">first Name</label>
                         <input type="text" class="form-control" id="name" name="firstname">
                    </div>
                    <div class="form-group">
                         <label for="lastname">last Name</label>
                         <input type="text" class="form-control" id="name" name="lastname">
                    </div>
                    <div class="form-group">
                         <label for="miss_address">missing person address</label>
                         <input type="text" class="form-control" id="address" name="miss_address">
                    </div>
                    <div class="form-group">
                         <label for="gender">Gender</label>
                         <select name="gender" id="gender">
                              <option value="male">male</option>
                              <option value="female">female</option>
                              <option value="other">others</option>
                         </select>
                    </div>
                    <div class="form-group">
                         <label for="report_add">report person address(You)</label>
                         <input type="text" class="form-control" name="report_add" id="report_add">
                    </div>
                    <div class="form-group">
                         <label for="miss-date">missing date</label>
                         <input type="date" class="form-control" name="miss_date" id="miss-date">
                    </div>
                    <div class="form-group">
                         <label for="contact-no">contact_No</label>
                         <input type="number" class="form-control" name="contact_no" id="contact-no">
                    </div>
                    <div class="form-group">
                         <label for="exampleTextarea">Description</label>
                         <textarea class="form-control" id="exampleTextarea" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                         <label for="exampleInputFile">Upload photo</label>
                         <input type="file" class="form-control-file" id="exampleInputFile" name="photo">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">submit</button>
               </fieldset>
          </form>
     </div>
</section>
<?php
include 'footer.php';
?>