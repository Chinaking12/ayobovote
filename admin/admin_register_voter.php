<?php
session_start();
require_once 'classes/Admin.php';

require_once "admin_guard.php";
$isAdmin = isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Register new voters - Ayobo Community Voting System" />
    <title>Register Voter - Ayobo Community</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #198754;
            --primary-dark: #157347;
            --light-bg: #f8fafc;
            --gray-700: #495057;
            --gray-500: #6c757d;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: linear-gradient(to bottom, var(--light-bg), #e9ecef);
            color: #212529;
            min-height: 100vh;
            padding: 2rem 1rem;
        }

        .registration-container {
            max-width: 520px;
            margin: 0 auto;
        }

        .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            background: white;
        }

        .card-header {
            background: var(--primary);
            color: white;
            padding: 2rem 1.75rem 1.5rem;
            text-align: center;
        }

        .form-label {
            font-weight: 500;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-control:focus {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.18);
        }

        .admin-notice {
            background: #fff3cd;
            border-left: 5px solid #ffc107;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .btn-register {
            padding: 0.85rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.2s;
        }

        .btn-register:hover {
            background-color: var(--primary-dark);
            transform: translateY(-1px);
        }

        .back-link {
            color: var(--gray-500);
            font-weight: 500;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: var(--primary);
            text-decoration: none;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 1.75rem;
            }

            .card-header {
                padding: 1.75rem 1.25rem 1.25rem;
            }
        }
    </style>
</head>

<body>

    <div class="registration-container">

        <!-- Back link -->
        <a href="admin_dashboard.php" class="d-inline-flex align-items-center mb-4 back-link text-decoration-none">
            <i class="bi bi-chevron-left me-2"></i>
            Back to Dashboard
        </a>

        <?php if ($isAdmin): ?>
            <div class="admin-notice">
                <strong>Admin Mode:</strong> You are registering a voter on their behalf.
                Please ensure all details are accurate and verified.
            </div>
        <?php endif; ?>

        <div class="card shadow">

            <div class="card-header">
                <i class="bi bi-person-check-fill" style="font-size: 3.2rem; opacity: 0.95;"></i>
                <h3 class="mt-3 mb-2 fw-semibold">Register New Voter</h3>
                <p class="mb-0 opacity-90" style="font-size: 1.05rem;">
                    Ayobo Community Voting System
                </p>
            </div>

            <div class="card-body p-4 p-md-5">

                <?php require_once "common/alert.php"; ?>

                <form action="process/process_register_voter.php" method="post">

                    <?php if ($isAdmin): ?>
                        <div class="mb-4">
                            <label class="form-label">Voter ID <span class="text-danger">*</span></label>
                            <input
                                type="text"
                                name="voter_id"
                                class="form-control"
                                placeholder="e.g. AYB-2025-00123 or leave blank to auto-generate"
                                autocomplete="off"
                                autofocus>
                            <div class="form-text">
                                Leave blank if you want the system to generate a unique Voter ID.
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="mb-4">
                        <label class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            name="fullname"
                            class="form-control"
                            placeholder="Enter full name (Surname first)"
                            autocomplete="name"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="your.email@example.com"
                            autocomplete="email">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input
                            type="tel"
                            name="phone"
                            class="form-control"
                            placeholder="08012345678"
                            autocomplete="tel"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Residential Address in Ayobo <span class="text-danger">*</span></label>
                        <textarea
                            name="address"
                            class="form-control"
                            rows="2"
                            placeholder="House number, street name, area..."
                            required></textarea>
                        <div class="form-text mt-1">
                            Used to verify residency/eligibility in Ayobo community.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Create a strong password"
                            autocomplete="new-password"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                        <input
                            type="password"
                            name="confirm_password"
                            class="form-control"
                            placeholder="Confirm password"
                            autocomplete="new-password"
                            required>
                    </div>

                    <button
                        type="submit"
                        name="btn"
                        class="btn btn-success btn-lg w-100 btn-register mt-3">
                        <i class="bi bi-person-plus-fill me-2"></i>
                        <?php echo $isAdmin ? 'Register Voter' : 'Create My Account'; ?>
                    </button>

                </form>
            </div>
        </div>

        <?php if (!$isAdmin): ?>
            <div class="text-center mt-4">
                <small class="text-muted">
                    Already have an account?
                    <a href="voter_login.php" class="text-success fw-medium text-decoration-none">
                        Login here
                    </a>
                </small>
            </div>
        <?php endif; ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>