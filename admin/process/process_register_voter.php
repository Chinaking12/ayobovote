<?php
session_start();
require_once '../classes/Admin.php';
require_once dirname(__DIR__, 2) . '/helpers/Mailer.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../admin_register_voter.php');
    exit();
}

$admin = new Admin();

$fullname       = trim($_POST['fullname'] ?? '');
$email          = trim($_POST['email'] ?? '');
$phone          = trim($_POST['phone'] ?? '');
$address        = trim($_POST['address'] ?? '');
$password       = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

if (empty($fullname) || empty($email) || empty($phone) || empty($address) || empty($password)) {
    $_SESSION["errormsg"] = "All fields are required";
    header("location: ../admin_register_voter.php");
    exit();
}

if ($password !== $confirm_password) {
    $_SESSION['errormsg'] = 'Passwords do not match';
    header('location: ../admin_register_voter.php');
    exit();
}

// Add voter
$rsp = $admin->add_voter($fullname, $phone, $email, $password);

if ($rsp['success']) {
    // Send email with voter ID
    sendVoterIDEmail(
        $email,
        $fullname,
        $rsp['voter_id']
    );

    $_SESSION['msg'] = "Voter registered successfully! Voter ID: " . $rsp['voter_id'];
} else {
    $_SESSION['errormsg'] = $rsp['message'] ?? "Error registering voter. Please try again.";
}

header('location: ../admin_register_voter.php');
exit();
