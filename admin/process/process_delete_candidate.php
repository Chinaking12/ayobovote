<?php
session_start();
require_once '../classes/Admin.php';
require_once "../admin_guard.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['candidate_id'])) {
    $_SESSION['errormsg'] = "Invalid request";
    header("location: ../admin_manage_candidates.php");
    exit();
}

$admin = new Admin();
$candidate_id = (int)$_POST['candidate_id'];

$result = $admin->deleteCandidate($candidate_id);

if ($result['success']) {
    $_SESSION['msg'] = $result['message'];
} else {
    $_SESSION['errormsg'] = $result['message'];
}

header("location: ../admin_manage_candidates.php");
exit();
