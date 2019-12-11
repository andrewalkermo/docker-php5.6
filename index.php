<?php 
echo phpversion();
mysqli_connect("db", "root", "phprs") or die(mysqli_error());
echo "Connected to MySQL<br />";