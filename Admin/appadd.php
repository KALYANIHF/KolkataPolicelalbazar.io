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
    $guardians_name = $_POST['guardians_name'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $y_address = $_POST['y_address'];
    $cause = $_POST['cause'];
    $amount = $_POST['amount'];
    $f_description = $_POST['f_description'];

    $sql = "INSERT INTO tbl_onlineapplication (f_name,l_name,guardians_name,gender,phone_number,y_address,cause,amount,f_description) VALUES ('$f_name','$l_name','$guardians_name','$gender','$phone_number','$y_address','$cause','$amount','$f_description')";
    if ($conn->query($sql) === true) {
        header("location:appdashboard.php");
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;

    }
}
$conn->close();
?>
<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/criminal.png" height=50, width=50>
        	<div class="page-title"><h2>Application Form</h2></div>
            <div class="content" >
			<form method="post" action="appadd.php">
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
                            <label class="input-label" for="input-1"> <b>GUARDIAN'S NAME</b></label>
                            <input class="t_box" placeholder="insert name" type="text" id="input-1" name="guardians_name" />
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
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1"  name="phone_number"/>
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
                     <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>CAUSE</b></label>
                            <textarea  class="input-textarea" placeholder="insert cause" type="text" id="text-1" name="cause"></textarea>
                     </div>
                     </div>
                     </div>
                   <div class="row">
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>AMOUNT</b></label>
                            <input class="t_box" placeholder="insert amount" type="text" id="input-1"  name="amount"/>
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



                   <div class=" col-6">
                   		<div class="form-grup tar">
						<input type="submit" value="Submit" class="blue-btn">
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


