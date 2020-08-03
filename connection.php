<?php
$conn = mysqli_connect("localhost", "root", "souvikmondal", "police_admin");
if (mysqli_connect_error()) {
     echo "can not connect " . mysqli_connect_error();
}
