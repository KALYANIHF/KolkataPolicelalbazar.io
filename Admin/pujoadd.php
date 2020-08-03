<?php
include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';
include 'left.php';
if ($_POST['addpuja'] == 'ADD') {
    $club_name = $_POST['club_name'];
    $club_reg_number = $_POST['club_reg_number'];
    $secretary_name = $_POST['sec_name'];
    $ph_no = $_POST['phone_number'];
    $occasion = $_POST['occasion'];
    $starting_date = $_POST['starting_date'];
    $ending_date = $_POST['ending_date'];
    $y_address = $_POST['y_address'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $query = "INSERT INTO `tbl_pujo_permission` ( `club_name`, `club_reg_number`, `secretary_name`, `ph_no`, `occasion`, `starting_date`, `ending_date`, `y_address`, `photo`) VALUES ('" . $club_name . "','" . $club_reg_number . "','" . $secretary_name . "','" . $ph_no . "','" . $occasion . "','" . $starting_date . "','" . $ending_date . "','" . $y_address . "','" . $target_file . "')";

        $res = mysqli_query($conn, $query);

        if ($res) {

            header("location:pujodashboard.php");

        } else {
            echo "Sorry, Not Inserted.";
        }
    } else {
        echo "Sorry, Some Error Happened.";
    }
}
?>
<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/pujo.png" height=50, width=50>
        	<div class="page-title"><h2>Pujo Permission Form</h2></div>
            <div class="content" >
			<form action="pujoadd.php" method="post" enctype="multipart/form-data" id="subForm" name="subForm">
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>YOUR CLUB NAME</b></label>
                            <input class="t_box" placeholder="insert your club name" type="text" id="input-1" name="club_name"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>CLUB REGISTRATION NUMBER</b></label>
                            <input class="t_box" placeholder="insert your club reg number" type="text" id="input-1" name="club_reg_number" />
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>SECRETARY NAME</b></label>
                            <input class="t_box" placeholder="insert your club secretary name" type="text" id="input-1" name="sec_name" />
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>PHONE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your phone number" type="text" id="input-1"  name="phone_number"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                         <label class="input-label" for="text-1" ><b>OCCASION</b></label>
                         <select name="occasion" class=" select-c">
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
                            <label class="input-label" for="text-1"><b>ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="y_address"></textarea>
                     </div>
                 </div>
                </div>
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>STARTING DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="starting_date">
                        </div>
                </div>
                  <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>ENDING DATE</b> </label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="ending_date">
                        </div>
                </div>
                </div>

                <div class="row">
                   <div class=" col-6">
                    <div class="form-grup">
                            <div class="row">
                                <div class=" col-3"><label class="input-label" for="image"><b>UPLOAD PICTURE</b></label></div>
                                <div class=" col-9">
									<input type="file" name="photo" id="photo">
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class=" col-6">
                   		<div class="form-grup tar">
                         <input type="hidden" name="addpuja" id="addpuja" value="ADD">
						<input type="submit" value="Submit" id="submit" name="submit" class="blue-btn">
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


