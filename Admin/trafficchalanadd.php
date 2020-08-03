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
    $license_number = $_POST['license_number'];
    $reason = $_POST['reason'];
    $chalan_no = $_POST['chalan_no'];
    $amount = $_POST['amount'];
    $chalan_date = $_POST['chalan_date'];
    $mobile_number = $_POST['mobile_number'];

    $sql = "INSERT INTO tbl_fine (f_name,l_name,license_number,reason,chalan_no,amount,chalan_date,mobile_number) VALUES ('$f_name','$l_name','$license_number','$reason','$chalan_no','$amount','$chalan_date','$mobile_number')";
    if ($conn->query($sql) === true) {
        //echo"<h2>New record created successfully</h2>";
        header("location:trafficdashboard.php");
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;

    }
}
$conn->close();
?>
<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/traffic.png" height=50, width=50>
        	<div class="page-title"><h2>Traffic Chalan Form</h2></div>
            <div class="content" >
			<form method="post" action="trafficchalanadd.php">
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
                            <label class="input-label" for="input-1"><b>LICENSE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your license number" type="text" id="input-1"  name="license_number"/>
                        </div>
                   </div>
               </div>
               <div class="row">
                 <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>REASON</b></label>
                            <textarea  class="input-textarea" placeholder="insert reason" type="text" id="text-1" name="reason"></textarea>
                     </div>
                 </div>
                </div>
                <div class="row">
                <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>CHALAN NUMBER</b></label>
                            <input class="t_box" placeholder="insert your chalan number" type="text" id="input-1"  name="chalan_no"/>
                        </div>
                   </div>
                <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>AMOUNT</b></label>
                            <input class="t_box" placeholder="insert amount" type="text" id="input-1"  name="amount"/>
                        </div>
                   </div>
                   </div>
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>CHALAN DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="chalan_date">
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

