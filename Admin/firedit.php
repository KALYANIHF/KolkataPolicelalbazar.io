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
    $f_address = $_POST['f_address'];
    $fir_number = $_POST['fir_number'];
    $fir_date = $_POST['fir_date'];
    $f_description = $_POST['f_description'];
    $incident_date = $_POST['incident_date'];
    $mobile_no = $_POST['mobile_no'];

    $query = "UPDATE tbl_fir SET f_name='$f_name',l_name='$l_name',f_address='$f_address',fir_number='$fir_number',fir_date='$fir_date',f_description='$f_description',incident_date='$incident_date',mobile_no='$mobile_no' WHERE id='$id'";
    $res = mysqli_query($conn, $query);
    if ($conn->query($query) === true) {
        //echo"<h2>New record created successfully</h2>";
        header("location:stuffdashboard.php");
    } else {
        echo "ERROR:" . $query . "<br>" . $conn->error;

    }
}
$sql = "SELECT * FROM tbl_fir WHERE id=$id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
$conn->close();
?>

<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/fir.png" height=50, width=50>
        	<div class="page-title"><h2>Fir Form</h2></div>
            <div class="content" >
			<form method="post" action=#>
            <input type="hidden" name="action" value="edit">
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIRST NAME</b></label>
                            <input class="t_box" placeholder="insert first name" type="text" id="input-1" name="f_name" value="<?php echo $row['f_name'] ?>"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>LAST NAME</b></label>
                            <input class="t_box" placeholder="insert surname" type="text" id="input-1" name="l_name" value="<?php echo $row['l_name'] ?>"/>
                        </div>
                   </div>
                </div>
                 <div class="row">
                 <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="f_address"> <?php echo $row['f_address'] ?></textarea>
                     </div>
                 </div>
                </div>
                <div class="row">
                  <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIR NUMBER</b></label>
                            <input class="t_box" placeholder="insert fir number" type="text" id="input-1"  name="fir_number" value="<?php echo $row['fir_number'] ?>"/>
                        </div>
                   </div>
               <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIR DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="fir_date" value="<?php echo $row['fir_date'] ?>">
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
                </div>
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>INCIDENT DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="incident_date" value="<?php echo $row['incident_date'] ?>">
                        </div>
                </div>
                <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>MOBILE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1" name="mobile_no" value="<?php echo $row['mobile_no'] ?>"/>
                        </div>
                   </div>
                   </div>
                   <div class="row">

                   <div class=" col-6">
                   		<div class="form-grup tar">
						<input type="button" class="org-btn" value="Cancel" onClick="window.location.href='firdashboard.php'">
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

