<?php
session_start();
require_once 'classes/Admin.php';     // if needed for admin class
require_once "admin_guard.php";

// Since this page is protected by admin_guard.php, we can safely assume admin is logged in
$isAdmin = isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Add new candidate - Ayobo Community Voting System" />
    <title>Add New Candidate - Ayobo Community</title>

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

        .form-container {
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
        .form-control:focus,
        .form-select,
        .form-select:focus {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }

        .form-control:focus,
        .form-select:focus {
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

        .btn-submit {
            padding: 0.85rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.2s;
        }

        .btn-submit:hover {
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

    <div class="form-container">

        <!-- Back link -->
        <a href="admin_dashboard.php" class="d-inline-flex align-items-center mb-4 back-link text-decoration-none">
            <i class="bi bi-chevron-left me-2"></i>
            Back to Dashboard
        </a>

        <?php if ($isAdmin): ?>
            <div class="admin-notice">
                <strong>Admin Mode:</strong> You are adding a new candidate.
                Please double-check the details before submitting.
            </div>
        <?php endif; ?>

        <div class="card shadow">

            <div class="card-header">
                <i class="bi bi-person-badge-fill" style="font-size: 3.2rem; opacity: 0.95;"></i>
                <h3 class="mt-3 mb-2 fw-semibold">Add New Candidate</h3>
                <p class="mb-0 opacity-90" style="font-size: 1.05rem;">
                    Ayobo Community Voting System
                </p>
            </div>

            <div class="card-body p-4 p-md-5">

                <?php require_once "common/alert.php"; ?>

                <form action="process/process_add_candidate.php" method="post">

                    <div class="mb-5">
                        <label class="form-label">Candidate Full Name <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            name="fullname"
                            class="form-control"
                            placeholder="e.g. Adewale Johnson"
                            autocomplete="name"
                            autofocus>
                    </div>

                    <div class="mb-5">
                        <label class="form-label">Position / Post <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            name="position"
                            class="form-control"
                            placeholder="e.g. Chairman, Secretary, Treasurer">
                    </div>

                    <div class="mb-5">
                        <label class="form-label">Political Party / Group <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            name="party"
                            class="form-control"
                            placeholder="e.g. Unity Party, Progress Alliance">
                    </div>

                    <button
                        type="submit"
                        name="submit_candidate"
                        class="btn btn-success btn-lg w-100 btn-submit mt-3">
                        <i class="bi bi-person-plus-fill me-2"></i>
                        Add Candidate
                    </button>

                </form>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>