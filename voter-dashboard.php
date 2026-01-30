<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Ayobo Community Online Voting System for secure and transparent local government elections."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="all.css" />

    <title>Vote | Ayobo Community</title>
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark shadow-sm" style="background-color: rgb(122, 165, 233)">
      <div class="container">
        <span class="navbar-brand fw-bold"> Ayobo Voting System </span>

        <a href="voter-login.html" class="voterLogBtn">
          <i class="bi bi-box-arrow-right me-1"></i>
          Logout
        </a>
      </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container py-5">
      <!-- HEADER -->
      <div class="row mb-4 align-items-center">
        <div class="col">
          <h2 class="fw-bold">Cast Your Vote</h2>
          <p class="text-muted">
            Select your preferred candidate and submit your vote
          </p>
          <p class="text-muted">Welcome, <strong>John Doe</strong>!</p>
        </div>

        <div class="col-auto">
          <a href="results.html" class="btn btn-outline-primary">
            <i class="bi bi-bar-chart me-2"></i>
            View Results
          </a>
        </div>
      </div>

      <!-- CANDIDATES -->
      <div class="row g-4">
        <!-- Candidate 1 -->
        <div class="col-md-6 col-lg-4">
          <div
            class="card h-100 shadow-sm border-primary"
            style="cursor: pointer"
          >
            <div class="card-body text-center p-4">
              <div class="mb-3" style="font-size: 64px">🧑‍💼</div>

              <h5 class="fw-bold">Ade Johnson</h5>
              <p class="text-muted mb-2">Chairman</p>
              <span class="badge bg-secondary">Unity Party</span>

              <div class="mt-3">
                <i class="bi bi-check-circle-fill text-primary fs-4"></i>
                <p class="fw-bold mt-2 mb-0 text-primary">Selected</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Candidate 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm" style="cursor: pointer">
            <div class="card-body text-center p-4">
              <div class="mb-3" style="font-size: 64px">🧑‍⚖️</div>

              <h5 class="fw-bold">Mary Adebayo</h5>
              <p class="text-muted mb-2">Chairman</p>
              <span class="badge bg-secondary">Progress Party</span>
            </div>
          </div>
        </div>
      </div>

      <!-- SUBMIT BUTTON -->
      <form action="" method="post">
        <div class="row mt-5">
          <div class="col text-center">
            <button name="btn" type="submit" class="btn btn-primary btn-lg px-5">
              <i class="bi bi-check2-square me-2"></i>
              Submit Vote
            </button>
          </div>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
