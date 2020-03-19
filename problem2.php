<?php

$conid = mysqli_connect("localhost", "root", "", "books")
or die("Cannot connect." .mysqli_connect_errno()."".mysqli_connect_error());

echo "Connected. ".mysqli_get_host_info($conid);

?>