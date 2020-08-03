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
    $license_number = $_POST['license_number'];
    $reason = $_POST['reason'];
    $chalan_no = $_POST['chalan_no'];
    $amount = $_POST['amount'];
    $chalan_date = $_POST['chalan_date'];
    $mobile_number = $_POST['mobile_number'];

    $query = "UPDATE tbl_fine SET f_name='$f_name',l_name='$l_name',license_number='$license_number',reason='$reason',chalan_no='$chalan_no',amount='$amount',chalan_date='$chalan_date',mobile_number='$mobile_number' WHERE id='$id'";
    $res = mysqli_query($conn, $query);
    if ($conn->query($query) === true) {
        //echo"<h2>New record created successfully</h2>";
        header("location:trafficdashboard.php");
    } else {
        echo "ERROR:" . $query . "<br>" . $conn->error;

    }
}
$sql = "SELECT * FROM tbl_fine WHERE id=$id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
$conn->close();
?>

<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/traffic.png" height=50, width=50>
        	<div class="page-title"><h2>Traffic Chalan Form</h2></div>
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
                            <label class="input-label" for="input-1"><b>LICENSE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your license number" type="text" id="input-1"  name="license_number" value="<?php echo $row['license_number'] ?>"/>
                        </div>
                   </div>
               </div>
               <div class="row">
                 <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>REASON</b></label>
                            <textarea  class="input-textarea" placeholder="insert reason" type="text" id="text-1" name="reason"> <?php echo $row['reason'] ?></textarea>
                     </div>
                 </div>
                </div>
                <div class="row">
                <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>CHALAN NUMBER</b></label>
                            <input class="t_box" placeholder="insert your chalan number" type="text" id="input-1"  name="chalan_no" value="<?php echo $row['chalan_no'] ?>"/>
                        </div>
                   </div>
                <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>AMOUNT</b></label>
                            <input class="t_box" placeholder="insert amount" type="text" id="input-1"  name="amount" value="<?php echo $row['amount'] ?>"/>
                        </div>
                   </div>
                   </div>
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>CHALAN DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="chalan_date" value="<?php echo $row['chalan_date'] ?>">
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