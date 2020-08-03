<?php
include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';

include 'left.php';

$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $club_name = $_POST['club_name'];
    $club_reg_number = $_POST['club_reg_number'];
    $secretary_name = $_POST['sec_name'];
    $ph_no = $_POST['phone_number'];
    $occasion = $_POST['occasion'];
    $starting_date = $_POST['starting_date'];
    $ending_date = $_POST['ending_date'];
    $y_address = $_POST['y_address'];

    $query = "UPDATE tbl_pujo_permission SET club_name='$club_name',club_reg_number='$club_reg_number',secretary_name='$secretary_name',ph_no='$ph_no',occasion='$occasion',starting_date='$starting_date',ending_date='$ending_date',y_address='$y_address' WHERE id='$id'";
    $res = mysqli_query($conn, $query);
    if ($conn->query($query) === true) {
        //echo"<h2>New record created successfully</h2>";
        header("location:pujodashboard.php");
    } else {
        echo "ERROR:" . $query . "<br>" . $conn->error;

    }
}
$sql = "SELECT * FROM tbl_pujo_permission WHERE id=$id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
$conn->close();
?>

<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/pujo.png" height=50, width=50>
        	<div class="page-title"><h2>Pujo Permission Form</h2></div>
            <div class="content" >
			<form method="post" action=#>
            <input type="hidden" name="action" value="edit">
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>Your Club Name</b></label>
                            <input class="t_box" placeholder="insert your club name" type="text" id="input-1" name="club_name" value="<?php echo $row['club_name'] ?>"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>CLUB REGISTRATION NUMBER</b></label>
                            <input class="t_box" placeholder="insert your club reg number" type="text" id="input-1" name="club_reg_number" value="<?php echo $row['club_reg_number'] ?>" />
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>SECRETARY NAME</b></label>
                            <input class="t_box" placeholder="insert your club secretary name" type="text" id="input-1" name="sec_name"  value="<?php echo $row['secretary_name'] ?>" />
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>PHONE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your phone number" type="text" id="input-1"  name="phone_number" value="<?php echo $row['ph_no'] ?>"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                         <label class="input-label" for="text-1" ><b>OCCASION</b></label>
                         <select name="occasion" class=" select-c" value="<?php echo $row['occasion'] ?>">
                            <option value="DURGA PUJA" > DURGA PUJA </option>
                            <option value="KALI PUJA">KALI PUJA</option>
                            <option value="GANESH PUJA">GANESH PUJA </option>
                            <option value="KARTIK PUJA"> KARTIK PUJA </option>
                            <option value="JAGADHATRI PUJA"> JAGADHATRI PUJA </option>
                            <option value="CHOT PUJA"> CHOT PUJA </option>
                         </select>
                        </div>
                   </div>
               </div>
               <div class="row">
                 <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b> ADDRESS</b> </label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="y_address" ><?php echo $row['y_address'] ?></textarea>
                     </div>
                 </div>
                </div>
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b> STARTING DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="starting_date" value="<?php echo $row['starting_date'] ?>">
                        </div>
                </div>
                  <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b> ENDING DATE</b> </label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="ending_date" value="<?php echo $row['ending_date'] ?>" >
                        </div>
                </div>
                </div>
                <div class=" col-6">
                        <div class="form-grup" >
                            <div class="row" >
                                <div class=" col-3 r_label"><label class="input-label mr-06" for="text-1"><b>STATUS</b></label>
                                </div>
                                <div class=" col-9" >
                                    <div class="radio-w" >
                                        <span>
                                            <label>
                                            <input type="radio" value="Y" name="no" checked="checked" >
                                            <dfn> yes</dfn></label>
                                        </span>
                                        <span>
                                        	<label>
                                            <input type="radio" value="N" name="no">
                                            <dfn> no</dfn></label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                <div class="row">
                   <div class=" col-6">
                    <div class="form-grup">
                            <div class="row">
                                <div class=" col-3"><label class="input-label" for="text-1"><b>UPLOAD PICTURE</b></label></div>
                                <div class=" col-9">
									<input type="file" class="upload required" name="photo" id="photo" >
                                </div>
                            </div>
                        </div>
                   </div>
                   </div>
                <div class="tac mart30">
               <input type="button" class="org-btn" value="Cancel" onClick="window.location.href='pujodashboard.php'">
                <input type="SUBMIT" value="Submit" class="blue-btn" name="submit" />
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