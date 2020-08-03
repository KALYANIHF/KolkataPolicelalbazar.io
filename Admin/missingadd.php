<?php
include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';
include 'left.php';
if ($_POST['addmissing'] == 'ADD') {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $your_address = $_POST['your_address'];
    $con_no = $_POST['con_no'];
    $missing_ads = $_POST['missing_ads'];
    $mis_date = $_POST['mis_date'];
    $y_description = $_POST['y_description'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {

        $query = "INSERT INTO `tbl_missing_person` ( `f_name`, `l_name`, `gender`, `your_address`, `con_no`, `missing_ads`, `mis_date`, `y_description`, `photo`) VALUES ('" . $f_name . "','" . $l_name . "','" . $gender . "','" . $your_address . "','" . $con_no . "','" . $missing_ads . "','" . $mis_date . "','" . $y_description . "','" . $target_file . "')";

        $res = mysqli_query($conn, $query);

        if ($res) {

            header("location:missingdashboard.php");

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
        <img src="img/mp.png" height=50, width=50>
        	<div class="page-title"><h2>Missing Form</h2></div>
            <div class="content" >
			<form action="missingadd.php" method="post" enctype="multipart/form-data" id="subForm" name="subForm">
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
                   </div>
                    <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="your_address"></textarea>
                     </div>
                     </div>
                     </div>
                   <div class="row">
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>MOBILE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1"  name="con_no"/>
                        </div>
                   </div>
               </div>
               <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b> MISSING ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="missing_ads"></textarea>
                     </div>
                     </div>
                     </div>

                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>MISSING DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="mis_date">
                        </div>
                </div>
                </div>
                 <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>DESCRIPTION</b></label>
                            <textarea  class="input-textarea" placeholder="insert description" type="text" id="text-1" name="y_description"></textarea>
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
                         <input type="hidden" name="addmissing" id="addmissing" value="ADD">
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




