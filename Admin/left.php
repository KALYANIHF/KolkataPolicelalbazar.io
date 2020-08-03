
<div class="l_pan">
    <ul>
    	<li  class="active"><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><b> HOME</b> </a></li>
		<li><a href="trafficdashboard.php"><i class="fa fa-taxi" aria-hidden="true"></i><b>TRAFFIC FINE</b> </a></li>
		<li><a href="firdashboard.php"><i class="fa fa-gavel" aria-hidden="true"></i>  <b>FIR</b></a></li>
        <li><a href="missingdashboard.php"><i class="fa fa-male" aria-hidden="true"></i> <b> &nbsp;&nbsp;MISSING PERSON</b> </a></li>
        <li><a href="appdashboard.php"><i class="fa fa-laptop" aria-hidden="true"></i><b>ONLINE APPLICATION</b></a></li>
        <li><a href="pujodashboard.php"><i class="fa fa-female" aria-hidden="true"></i><b>&nbsp;&nbsp;PUJO PERMISSION </b>    </a></li>
         <?php if ($_SESSION['type'] == 'A') {?>
        <li><a href="stuffdashboard.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i><b> MANAGE STAFF</b></a></li>
        <?php }?>
        <li><a href="appdashboard.php">&nbsp;<i class="fa fa-inr" aria-hidden="true"></i><b>&nbsp;&nbsp;&nbsp;IPC LIST</b></a></li>
         <li><a href="#"><i class="fa fa-audio-description" aria-hidden="true"></i><b>ABOUT US</b></a></li>
         <li><a href="appdashboard.php"><i class="fa fa-handshake-o" aria-hidden="true"></i><b>HELP</b></a></li>
         <li><a href="appdashboard.php"><i class="fa fa-address-book" aria-hidden="true"></i><b>CONTACT US</b></a></li>
    </ul>
</div>&nbsp;