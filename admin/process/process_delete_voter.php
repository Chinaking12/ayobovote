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

$result = $admin->deleteVoter($voter_id);

if ($result['success']) {
    $_SESSION['msg'] = $result['message'];
} else {
    $_SESSION['errormsg'] = $result['message'];
}

header("location: ../admin_manage_voters.php");
exit();
