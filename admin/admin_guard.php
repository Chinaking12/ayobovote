<?php
if (!isset($_SESSION["admin_id"])) {
  $_SESSION["errormsg"] = "You have to be logged in as an admin";
  header("location:admin_login.php");
  exit;
}
