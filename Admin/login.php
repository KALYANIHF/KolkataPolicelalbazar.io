<?php
include "../connection.php";

$type = $_GET['type'];
$_SESSION['type'] = $type;
//echo "Type = ".$_SESSION['type'];
if ($type == 'A') {
    $title = "Administrator";
} else {
    $title = "Stuff";
}
if (isset($_POST['user_name'])) {

    $uname = $_POST['user_name'];
    $upassword = $_POST['user_password'];

    $sql = "SELECT * FROM tbl_user WHERE username='" . $uname . "'AND user_pass='" . $upassword . "'  AND type='" . $_SESSION['type'] . "'";
    //echo $sql; die();

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo " You Have Successfully Logged in";
        header("location:dashboard.php");

    } else {
        echo "
        <style>
h1 {
  color:black;
  text-shadow: 2px 2px 4px #000000;
}
</style>
<center>
<h1> wrong password sir! <br>
        please check it ;<br></h1>
        <strong>
        <h3>!THANK YOU!</h3>
        </strong>
        </center>";
        exit();
    }
}
?>
<!doctype html>
<html>
<head>
<meta content="width=device-width,initial-scale=1" name=viewport>
<meta charset="utf-8">
<title> POLICE </title>
<link href="css/common.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
</head>
<body class="log_bg">
	<div class="wrapper">
    	<div class="logopan"><img src="img/indexlogo.png" alt="police" height=150 width=150></div>
        <div class="sm-w">
        <div class=" lg-box">
        	<h1><?php echo $title; ?> Login</h1>
            <form method="POST" action=#>
            	<div class="form-grup">
                   <label class="input-label" for="input-1"><h2><strong>USERNAME</strong></h2></label>
                   <input class="t_box"  id="input-1" type="text" name="user_name">
               </div>
               <div class="form-grup">
                   <label class="input-label" for="input-1"><h2><strong> PASSWORD</strong></h2></label>
                   <input class="t_box"  id="input-1" type="password" name="user_password">
               </div>
               <div class="tac mart30">
               <input type="SUBMIT" value="Login" class="blue-btn" name="submit" />
               <input type="button" class="org-btn" value="Cancel" onClick="window.location.href='index.php'">
               </div>
            </form>
        </div>
    </div>
    </div>

</html>
