<?php
include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';

include 'left.php';
$id = $_REQUEST['id'];

$query = "SELECT * FROM tbl_missing_person WHERE id = $id";
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        //$data[] = $row;
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $gender = $row['gender'];
        $your_address = $row['your_address'];
        $con_no = $row['con_no'];
        $missing_ads = $row['missing_ads'];
        $mis_date = $row['mis_date'];
        $y_description = $row['y_description'];
        $photo = $row['photo'];
    }
}

if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $your_address = $_POST['your_address'];
    $con_no = $_POST['con_no'];
    $missing_ads = $_POST['missing_ads'];
    $mis_date = $_POST['mis_date'];
    $y_description = $_POST['y_description'];

    if ($_FILES["photo"]["tmp_name"] != '') {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);

        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $query_imgdel = "SELECT photo FROM tbl_missing_person WHERE id = $id";
            $res_imgdel = mysqli_query($conn, $query_imgdel);
            $img = mysqli_fetch_assoc($res_imgdel);

            if (!unlink($img['photo'])) {
                echo ("Error Deleting Image");
            } else {
                //$query = "UPDATE tbl_missing_person SET f_name='" . $f_name . "', l_name='" . $l_name . "',  gender='" . $gender . "', your_address='" . $your_address . "', con_no='" . $con_no . "', missing_ads='" . $missing_ads . "', mis_date='" . $mis_date . "', y_description='" . $y_description . "',photo='" . $target_file . "', updated_at='" . date('Y-m-d H:i:s') . "' WHERE id = $id";
                $query = "UPDATE tbl_missing_person SET f_name='$f_name', l_name='$l_name',gender='$gender',your_address='$your_address',con_no='$con_no',missing_ads='$missing_ads',mis_date='$mis_date',photo='$target_file' WHERE id='$id'";

                $res = mysqli_query($conn, $query);
            }
        } else {
            echo "Sorry! Some Error Happened.";
        }
    } else {

        //$queery = "UPDATE tbl_missing_person SET f_name='" . $f_name . "', l_name='" . $l_name . "',  gender='" . $gender . "', your_address='" . $your_address . "', con_no='" . $con_no . "', missing_ads='" . $missing_ads . "', mis_date='" . $mis_date . "', updated_at='" . date('Y-m-d H:i:s') . "' WHERE id = $id";

        $query = "UPDATE tbl_missing_person SET f_name='$f_name', l_name='$l_name',gender='$gender',your_address='$your_address',con_no='$con_no',missing_ads='$missing_ads',mis_date='$mis_date',y_description='$y_description'WHERE id='$id'";

        $res = mysqli_query($conn, $query);
    }

    if ($res) {
        header('Location: missingdashboard.php');
    } else {
        echo "Sorry, Not Updated.";
    }
}

?>


<div class="r_pan">
	<div class="row">
    	<div class="col-12  marb15">
        <img src="img/mp.png" height=50, width=50>
        	<div class="page-title"><h2>Missing Form</h2></div>
            <div class="content" >
		<form action="" method="post" enctype="multipart/form-data" id="subForm">
                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>FIRST NAME</b></label>
                            <input class="t_box" placeholder="insert your first name" type="text" id="input-1" name="f_name"  value="<?php echo $f_name; ?>"/>
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>LAST NAME</b></label>
                            <input class="t_box" placeholder="insert surname" type="text" id="input-1" name="l_name" required value="<?php echo $l_name; ?>" />
                        </div>
                   </div>
                   <div class=" col-6">
                        <div class="form-grup">
                         <label class="input-label" for="text-1" ><b>GENDER</b></label>
                         <select name="gender" class=" select-c" required value="<?php echo $gender; ?>">
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
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="your_address"><?php echo $your_address; ?></textarea>
                     </div>
                     </div>
                     </div>
                   <div class="row">
                   <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"><b>MOBILE NUMBER</b></label>
                            <input class="t_box" placeholder="insert your mobile number" type="text" id="input-1"  name="con_no" required value="<?php echo $con_no; ?>"/>
                        </div>
                   </div>
               </div>
               <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b> MISSING ADDRESS</b></label>
                            <textarea  class="input-textarea" placeholder="insert address" type="text" id="text-1" name="missing_ads"> <?php echo $missing_ads; ?></textarea>
                     </div>
                     </div>
                     </div>

                <div class="row">
                    <div class=" col-6">
                        <div class="form-grup">
                            <label class="input-label" for="input-1"> <b>MISSING DATE</b></label>
                            <input type="date" id="datepicker" placeholder="Insert Date" class="t_box i-calender" name="mis_date" required value="<?php echo $mis_date; ?>">
                        </div>
                </div>
                </div>
                 <div class="row">
                    <div class=" col-12">
                     <div class="form-grup">
                            <label class="input-label" for="text-1"><b>DESCRIPTION</b></label>
                            <textarea  class="input-textarea" placeholder="insert description" type="text" id="text-1" name="y_description"> <?php echo $y_description; ?></textarea>
                     </div>
                     </div>
                     </div>
             <div class="row">
                   <div class=" col-6">
                    <div class="form-grup">
                            <div class="row">
                                <div class=" col-3"><label class="input-label" for="image"><b>UPLOAD PICTURE</b></label></div>
                                <div class=" col-9">
                                <?php
if ($photo != '') {
    ?>
                                    <img src="<?php echo $photo; ?>" alt="" style="height: 100px; width: 100px;">
                                <?php }?>
									<input type="file" name="photo" id="photo">
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class=" col-6">
                   		<div class="form-grup tar">
                         <input type="button" class="org-btn" value="Cancel" onClick="window.location.href='missingdashboard.php'">
                <input type="submit" value="update" id="submit" class="blue-btn" name="submit" />
                        </div>
                   </div>
                </div>
            </form>
            </div>
        </div>
    </div>


</div>

