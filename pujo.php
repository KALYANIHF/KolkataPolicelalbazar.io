<?php
include 'header.php';
include 'connection.php';
error_reporting(0);
$club_name = htmlspecialchars($_POST['club_name']);
$club_reg_no = htmlspecialchars($_POST['club_reg_no']);
$secretary_name = htmlspecialchars($_POST['secretary_name']);
$ph_no = htmlspecialchars($_POST['ph_no']);
$occation = htmlspecialchars($_POST['occation']);
$starting_date = htmlspecialchars($_POST['starting_date']);
$end_date = htmlspecialchars($_POST['end_date']);
$address = htmlspecialchars($_POST['address']);
$photo = htmlspecialchars($_POST['photo']);
$file = $_FILES['photo'];
$filename = $_FILES['photo']['name'];
$filepath = $_FILES['photo']['tmp_name'];
$location = "admin/pujaper_img/" . $filename;
if ($conn) {
     $query = "INSERT INTO `tbl_pujo_permission`(`id`, `club_name`, `club_reg_number`, `secretary_name`, `ph_no`, `occasion`, `starting_date`, `ending_date`, `y_address`, `photo`, `status`) VALUES ('null','$club_name','$club_reg_no','$secretary_name','$ph_no','$occation','$starting_date','$end_date','$address','$photo','null')";
     if (isset($_POST['submit'])) {
          mysqli_query($conn, $query);
          move_uploaded_file($filepath, $location);
          echo '<script>alert("submit is successfull we will contact you soon")</script>';
     }
} else {
     echo '<script>alert("not submited please fill all field carefully)</script>';
}
?>
<link rel="stylesheet" href="css1/bootstrap3.min.css">
<link rel="stylesheet" href="css1/pujapermit.css">
<section class="one">
     <div class="container">
          <h1>Make festival enjoyable for everyone.</h1>
     </div>
</section>
<section class="form-fill">
     <h3>full the form bellow to make a request</h3>
     <div class="container1">
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
               <fieldset>
                    <div class="form-group">
                         <label for="club_name">club_name</label>
                         <input type="text" name="club_name" class="form-control" id="club_name">
                    </div>
                    <div class="form-group">
                         <label for="club_reg_no">club_reg_no</label>
                         <input type="number" class="form-control" id="name" name="club_reg_no">
                    </div>
                    <div class="form-group">
                         <label for="secretary_name">secretary_name</label>
                         <input type="text" class="form-control" id="name" name="secretary_name">
                    </div>
                    <div class="form-group">
                         <label for="ph_no">ph_no</label>
                         <input type="number" class="form-control" id="name" name="ph_no">
                    </div>
                    <div class="form-group">
                         <label for="occation">occation</label>
                         <input type="text" class="form-control" id="name" name="occation">
                    </div>
                    <div class="form-group">
                         <label for="starting_date">starting_date</label>
                         <input type="date" class="form-control" id="name" name="starting_date">
                    </div>
                    <div class="form-group">
                         <label for="end_date">end_date</label>
                         <input type="date" class="form-control" id="name" name="end_date">
                    </div>
                    <div class="form-group">
                         <label for="address">address</label>
                         <input type="text" class="form-control" id="name" name="address">
                    </div>
                    <div class="form-group">
                         <label for="photo">upload img</label>
                         <input type="file" name="photo" id="photo">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">submit</button>
               </fieldset>
          </form>
     </div>
</section>
</section>
<?php
include 'footer.php';
?>