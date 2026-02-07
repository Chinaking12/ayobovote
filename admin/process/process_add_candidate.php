<?php
session_start();
require_once '../classes/Admin.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("location: ../admin_add_candidate.php");
    exit();
}

$admin = new Admin();

$name = trim($_POST['fullname']);
$party = trim($_POST['party']);
$position = trim($_POST['position']);

if (empty($name) || empty($party) || empty($position)) {
    $_SESSION['errormsg'] = "All fields are required.";
    header("location: ../admin_add_candidate.php");
    exit();
}

$result = $admin->add_candidate($name, $party, $position);

if ($result) {
    $_SESSION['msg'] = "Candidate added successfully!";
} else {
    $_SESSION['errormsg'] = "Failed to add candidate. Please try again.";
}

header("location: ../admin_manage_candidates.php");
exit();
