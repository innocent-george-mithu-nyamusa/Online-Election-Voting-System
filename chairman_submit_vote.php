<?php
include("admin/dbcon.php");
session_start();

// session_destroy();
$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ch_id]', '$_SESSION[voters_id]')") or die($conn->error);
$conn->query("UPDATE `voters` SET `status` = 'Voted', chairman='1' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);

header("location:vote1.php");
