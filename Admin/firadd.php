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
    $f_address = $_POST['f_address'];
    $fir_number = $_POST['fir_number'];
    $fir_date = $_POST['fir_date'];
    $f_description = $_POST['f_description'];
    $incident_date = $_POST['incident_date'];
    $mobile_no = $_POST['mobile_no'];
    $sql = "INSERT INTO tbl_FIR (f_name,l_name,f_address,fir_number,fir_date,f_description,incident_date,mobile_no) VALUES ('$f_name','$l_name','$f_address','$fir_number','$fir_date','$f_description','$incident_date','$mobile_no')";
    if ($conn->query($sql) === true) {
        //echo"<h2>New record created successfully</h2>";
        header("location:firdashboard.php");
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;

    }
}
$conn->close();
?>
<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/fir.png" height=50, width=50>
        	<div class="page-title"><h2>Fir Form</h2></div>
            <div class="content" >
			<form method="post" action="firadd.php">
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIRST NAME</b></label>
                            <input class="t_box" placeholder="insert first name" type="text" id="input-1" name="f_name"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>LAST NAME</b></label>
                            <input class="t_box" placeholder="insert surname" type="text" id="input-1" name="l_name"/>
                        </div>
                   </div>
                </div>
                 <div class="row">
                 <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="f_address"></textarea>
                     </div>
                 </div>
                </div>
                <div class="row">
                  <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIR NUMBER</b></label>
                            <input class="t_box" placeholder="insert fir number" type="text" id="input-1"  name="fir_number"/>
                        </div>
                   </div>
               <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIR DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="fir_date">
                        </div>
                </div>
                </div>
                <div class="row">
                 <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>DESCRIPTION</b></label>
                            <textarea  class="input-textarea" placeholder="insert description" type="text" id="text-1" name="f_description"></textarea>
                     </div>
                 </div>
                </div>
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>INCIDENT DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="incident_date">
                        </div>
                </div>
                <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>MOBILE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1" name="mobile_no"/>
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



