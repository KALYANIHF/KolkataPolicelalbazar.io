<?php
include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';

include 'left.php';
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $mobile_number = $_POST['mobile_number'];
    $y_address = $_POST['y_address'];
    $dob = $_POST['dob'];
    $doj = $_POST['doj'];
    $username = $_POST['username'];
    $user_pass = $_POST['user_pass'];

    $query = "UPDATE tbl_user SET f_name='$f_name',l_name='$l_name',gender='$gender',mobile_number='$mobile_number',y_address='$y_address',dob='$dob',doj='$doj',username='$username',user_pass='$user_pass' WHERE id='$id'";
    $res = mysqli_query($conn, $query);
    if ($conn->query($query) === true) {
        //echo"<h2>New record created successfully</h2>";
        header("location:stuffdashboard.php");
    } else {
        echo "ERROR:" . $query . "<br>" . $conn->error;

    }
}
$sql = "SELECT * FROM tbl_user WHERE id=$id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
$conn->close();
?>

<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/stuff.png" height=50, width=50>
        	<div class="page-title"><h2><b>Stuff Entry Form</b></h2></div>
            <div class="content" >
			<form method="post" action=#>
            <input type="hidden" name="action" value="edit">
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIRST NAME</b></label>
                            <input class="t_box" placeholder="insert your first name" type="text" id="input-1" name="f_name" value="<?php echo $row['f_name'] ?>"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>LAST NAME</b></label>
                            <input class="t_box" placeholder="insert surname" type="text" id="input-1" name="l_name" value="<?php echo $row['l_name'] ?>"/>
                        </div>
                   </div>
                  <div class=" col-6">
                        <div class="form-grup">
                         <label class="input-label" for="text-1" ><b>GENDER</b></label>
                         <select name="gender" class=" select-c" value="<?php echo $row['gender'] ?>" >
                            <option value="MALE" > MALE </option>
                            <option value="FEMALE"> FEMALE </option>
                            <option value="OTHER"> OTHER </option>
                         </select>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>MOBILE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1"  name="mobile_number" value="<?php echo $row['mobile_number'] ?>"/>
                        </div>
                   </div>
                   </div>
                    <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="y_address"> <?php echo $row['y_address'] ?></textarea>
                     </div>
                     </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>DATE OF BIRTH</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="dob" value="<?php echo $row['dob'] ?>">
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>DATE OF JOINING</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="doj" value="<?php echo $row['doj'] ?>">
                        </div>
                   </div>
                     </div>
                   <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>USER NAME</b></label>
                            <input class="t_box" placeholder="insert your first name" type="text" id="input-1" name="username" value="<?php echo $row['username'] ?>"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>USER PASS</b></label>
                            <input class="t_box" placeholder="insert your first name" type="text" id="input-1" name="user_pass" value="<?php echo $row['user_pass'] ?>"/>
                        </div>
                   </div>
                   </div>
                <div class="row">

                   <div class=" col-6">
                   		<div class="form-grup tar">
						<input type="button" class="org-btn" value="Cancel" onClick="window.location.href='appdashboard.php'">
                <input type="SUBMIT" value="Submit" class="blue-btn" name="submit" />
                        </div>
                   </div>
                </div>

            </form>
            </div>
        </div>
    </div>


</div>


<?php
include "footer.php";
?>

