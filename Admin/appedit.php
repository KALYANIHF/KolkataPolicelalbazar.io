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
    $guardians_name = $_POST['guardians_name'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $y_address = $_POST['y_address'];
    $cause = $_POST['cause'];
    $amount = $_POST['amount'];
    $f_description = $_POST['f_description'];

    $query = "UPDATE tbl_onlineapplication SET f_name='$f_name',l_name='$l_name',guardians_name='$guardians_name',gender='$gender',phone_number='$phone_number',y_address='$y_address',cause='$cause',amount='$amount',f_description='$f_description' WHERE id='$id'";
    $res = mysqli_query($conn, $query);
    if ($conn->query($query) === true) {
        //echo"<h2>New record created successfully</h2>";
        header("location:appdashboard.php");
    } else {
        echo "ERROR:" . $query . "<br>" . $conn->error;

    }
}
$sql = "SELECT * FROM tbl_onlineapplication WHERE id=$id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
$conn->close();
?>

<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/criminal.png" height=50, width=50>
        	<div class="page-title"><h2>Application Form</h2></div>
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
                            <input class="t_box" placeholder="insert surname" type="text" id="input-1" name="l_name" value="<?php echo $row['l_name'] ?>"  />
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>GUARDIAN'S NAME</b></label>
                            <input class="t_box" placeholder="insert name" type="text" id="input-1" name="guardians_name" value="<?php echo $row['guardians_name'] ?>" />
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                         <label class="input-label" for="text-1" ><b>GENDER</b></label>
                         <select name="gender" class=" select-c" value="<?php echo $row['gender'] ?>"  >
                            <option value="MALE" > MALE </option>
                            <option value="FEMALE"> FEMALE </option>
                            <option value="OTHER"> OTHER </option>
                         </select>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>MOBILE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1"  name="phone_number"  value="<?php echo $row['phone_number'] ?>" />
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
                     <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>CAUSE</b></label>
                            <textarea  class="input-textarea" placeholder="insert cause" type="text" id="text-1" name="cause" ><?php echo $row['cause'] ?></textarea>
                     </div>
                     </div>
                     </div>
                   <div class="row">
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>AMOUNT</b></label>
                            <input class="t_box" placeholder="insert amount" type="text" id="input-1"  name="amount" value="<?php echo $row['amount'] ?>"/>
                        </div>
                   </div>
               </div>
                <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>DESCRIPTION</b></label>
                            <textarea  class="input-textarea" placeholder="insert description" type="text" id="text-1" name="f_description"> <?php echo $row['f_description'] ?></textarea>
                     </div>
                     </div>



                   <div class=" col-6">
                   		<div class="form-grup tar">
						 <input type="button" class="org-btn" value="Cancel" onClick="window.location.href='appdashboard.php'">
                <input type="SUBMIT" value="Submit" class="blue-btn" name="submit" />
                        </div>
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