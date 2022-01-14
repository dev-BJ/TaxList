<?php
$db=new mysqli("localhost","root", "") or die("No Connection");
$db->select_db("tax") or die("No Database connected!");
?>