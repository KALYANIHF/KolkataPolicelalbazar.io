<?php
include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';
include 'left.php';
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

    $sql = "INSERT INTO tbl_user (f_name,l_name,gender,mobile_number,y_address,dob,doj,username,user_pass) VALUES ('$f_name','$l_name','$gender','$mobile_number','$y_address','$dob','$doj','$username','$user_pass')";
    if ($conn->query($sql) === true) {
        header("location:stuffdashboard.php");
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;

    }
}
$conn->close();
?>
<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/stuff.png" height=50, width=50>
        	<div class="page-title"><h2><b>Stuff Entry Form</b></h2></div>
            <div class="content" >
			<form method="post" action="stuffadd.php">
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIRST NAME</b></label>
                            <input class="t_box" placeholder="insert your first name" type="text" id="input-1" name="f_name"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>LAST NAME</b></label>
                            <input class="t_box" placeholder="insert surname" type="text" id="input-1" name="l_name" />
                        </div>
                   </div>
                  <div class=" col-6">
                        <div class="form-grup">
                         <label class="input-label" for="text-1" ><b>GENDER</b></label>
                         <select name="gender" class=" select-c">
                            <option value="MALE" > MALE </option>
                            <option value="FEMALE"> FEMALE </option>
                            <option value="OTHER"> OTHER </option>
                         </select>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>MOBILE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1"  name="mobile_number"/>
                        </div>
                   </div>
                   </div>
                    <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="y_address"></textarea>
                     </div>
                     </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>DATE OF BIRTH</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="dob">
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>DATE OF JOINING</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="doj">
                        </div>
                   </div>
                     </div>
                   <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>USER NAME</b></label>
                            <input class="t_box" placeholder="insert your first name" type="text" id="input-1" name="username"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>USER PASS</b></label>
                            <input class="t_box" placeholder="insert your first name" type="text" id="input-1" name="user_pass"/>
                        </div>
                   </div>
                   </div>
                <div class="row">

                   <div class=" col-6">
                   		<div class="form-grup tar">
						<input type="submit" value="Submit" class="blue-btn">
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

</html>


