<?php

include "../connection.php";
?>
<!doctype html>
<?php
include 'header.php';

if (isset($_POST['Search'])) {
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM `tbl_user` WHERE f_name LIKE '%" . $valueToSearch . "%'";

    $search_result = filterTable($query);

} else {
    $query = "SELECT * FROM tbl_user";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "police_admin");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

if ($_GET['action'] == 'delete') {
    $id = $_REQUEST['id'];
    $query = "DELETE FROM tbl_user WHERE id=$id";
    $result = mysqli_query($conn, $query) or die(mysqli_error());
}

include 'left.php';
?>

<div class="r_pan">
	<div class="row">
    	<div class="col-10 dash_btn_group marb15 boder_r">
      		 <div class="row marb15">
             	<div class=" col-7">
                    <img src="img/stuff.png" height=50, width=50>
                	<h2 class="hs-1"><b>Stuff Data List</b></h2>
                </div>
                <div class=" col-5">
                	<form class="sr-w" method="POST">
                    	<input  placeholder="Search First Name "  type="text" name="valueToSearch">
                          <span>
                            <button  type="submit" name="Search" value="Filter">
                            	<img src="img/search.png" alt="">
                            </button>
                         </span>
                      </form>
                </div>
             </div>
             <div class="row">
             	<div class=" col-12">
        	<div class="res_table">
            	<table width="100%"  cellspacing="0" cellpadding="0" class="r_table">
              <thead>
                <tr>
                 <th width="25%"><h3><strong>FIRST NAME</strong></h3></th>
                  <th width="19%"><h3><strong>LAST NAME</strong></h3></th>
                  <th width="19%"><h3><strong>GENDER</strong></h3></th>
                  <th width="19%"><h3><strong>PHONE NUMBER</strong></h3></th>
                  <th width="19%"><h3><strong>ADDRESS</strong></h3></th>
                  <th width="19%"><h3><strong>DATE OF BIRTH</strong></h3></th>
                  <th width="25%"><h3><strong>DATE OF JOINING</strong></h3></th>
                  <th width="25%"><h3><strong>USERNAME</strong></h3></th>
                  <th width="15%"><h3><strong>USER PASS</strong></h3></th>
                  <th width="15%"><h3><strong>TYPE</strong></h3></th>
                  <th width="15%"><h3><strong>EDIT</strong></h3></th>
			      <th width="15%"><h3><strong>DELETE</strong></h3></th>

                </tr>
              </thead>
     <tbody>
              <?php
while ($row = mysqli_fetch_array($search_result)):
?>
        <tr>
                <td align="center"><?php echo $row['f_name']; ?></td>
                <td align="center"><?php echo $row["l_name"]; ?></td>
                <td align="center"><a href="#">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <?php echo $row['gender']; ?></a>
                <td align="center"><?php echo $row["mobile_number"]; ?></td>
                <td align="center"><?php echo $row["y_address"]; ?></td>
                <td align="center"><?php echo $row["dob"]; ?></td>
                <td align="center"><?php echo $row["doj"]; ?></td>
                <td align="center"><?php echo $row["username"]; ?></td>
                <td align="center"><?php echo $row["user_pass"]; ?></td>
                <td align="center"><a href="#">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <?php echo $row['type']; ?></a>
                </td>
                <td align="center">
                     <a href="stuffedit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><b> EDIT </b></a>
                </td>
                <td align="center">
                     <a href="<?php echo ($_SERVER["PHP_SELF"]); ?>?id=<?php echo $row['id']; ?>&action=delete"><i class="fa fa-trash-o" aria-hidden="true"></i><b>DELETE</b></a>
                </td>
         </tr>
             <?php
endwhile;
?>
     </tbody>
     </table>
       </div>
                </div>
             </div>
        </div>
        <div class=" col-2 add-w">
        	<ul>
            	<li>
                	<a href="stuffadd.php">
                    	<img src="img/addimg.png">
                        <span><h3><strong>Add Stuff</strong></h3></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

</html>
