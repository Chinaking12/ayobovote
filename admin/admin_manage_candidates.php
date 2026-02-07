<?php
session_start();
require_once 'classes/Admin.php';
require_once "admin_guard.php";

$admin = new Admin();
$candidates = $admin->getAllCandidates();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Candidates - Ayobo Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        .navbar {
            background: linear-gradient(to right, #dc3545, #c82333) !important;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
        }

        .table th {
            background: #f1f5f9;
            font-weight: 600;
        }

        .btn-delete {
            background: #dc3545;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        .btn-delete:hover {
            background: #c82333;
        }

        .no-data {
            text-align: center;
            color: #6c757d;
            padding: 3rem 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark shadow">
        <div class="container">
            <span class="navbar-brand fw-semibold fs-4">Manage Candidates</span>
            <a href="admin_dashboard.php" class="btn btn-outline-light">
                <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
            </a>
        </div>
    </nav>

    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">All Candidates</h3>
            <a href="admin_add_candidate.php" class="btn btn-success">
                <i class="bi bi-plus-lg me-2"></i>Add New Candidate
            </a>
        </div>

        <?php require_once 'common/alert.php' ?>

        <?php if (empty($candidates)): ?>
            <div class="card no-data">
                <div class="card-body">
                    <h5 class="text-muted">No candidates have been added yet.</h5>
                </div>
            </div>
        <?php else: ?>
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 align-middle">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Position</th>
                                    <th>Party</th>
                                    <th>Vote Count</th>
                                    <th>Added</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($candidates as $candidate): ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= htmlspecialchars($candidate['name']) ?></td>
                                        <td><?= htmlspecialchars($candidate['position']) ?></td>
                                        <td><?= htmlspecialchars($candidate['party']) ?></td>
                                        <td><?= number_format($candidate['vote_count'] ?? 0) ?></td>
                                        <td><?= date('M d, Y', strtotime($candidate['created_at'])) ?></td>
                                        <td>
                                            <form action="process/process_delete_candidate.php" method="POST" style="display:inline;"
                                                onsubmit="return confirm('Are you sure you want to delete <?= htmlspecialchars($candidate['name']) ?>?\n\nThis action cannot be undone.\n<?php if (!empty($candidate['vote_count'])): ?>This candidate has votes — deletion is not allowed.<?php endif; ?>');">
                                                <input type="hidden" name="candidate_id" value="<?= $candidate['id'] ?>">
                                                <button type="submit" class="btn btn-delete btn-sm" <?= !empty($candidate['vote_count']) ? 'disabled' : '' ?>>
                                                    <i class="bi bi-trash me-1"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>