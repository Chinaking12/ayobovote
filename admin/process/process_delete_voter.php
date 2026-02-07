<?php
session_start();
require_once '../classes/Admin.php';
require_once "../admin_guard.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['voter_id'])) {
    $_SESSION['errormsg'] = "Invalid request";
    header("location: ../admin_manage_voters.php");
    exit();
}

$admin = new Admin();
$voter_id = (int)$_POST['voter_id'];

if ($voter_id <= 0) {
    $_SESSION['errormsg'] = "Invalid voter ID";
    header("location: ../admin_manage_voters.php");
    exit();
}

$deleted = $admin->deleteVoter($voter_id);

if ($deleted) {
    $_SESSION['msg'] = "Voter deleted successfully";
} else {
    $_SESSION['errormsg'] = "Failed to delete voter. It may not exist or there was a database error.";
}

header("location: ../admin_manage_voters.php");
exit();
