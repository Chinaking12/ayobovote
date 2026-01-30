<!DOCTYPE php>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Ayobo Community Online Voting System for secure and transparent local government elections."
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="../all.css" />
    <title>Ayobo Community | Online Voting System</title>
  </head>

  <body>
    <div class="container">
      <div
        class="row justify-content-center align-items-center"
        style="min-height: 100vh"
      >
        <div class="col-md-6 col-lg-5">
          <!-- Back to Home -->
          <a
            href="index.php"
            class="btn btn-link text-decoration-none mb-3"
            style="color: rgb(122, 165, 233)"
          >
            <i class="bi bi-chevron-left me-1"></i>
            <!-- This is an inline level element -->
            <span>Back to Home</span>
          </a>

          <!-- Login Card -->
          <div class="card shadow-lg border-0">
            <div class="card-body p-5">
              <!-- Header -->
              <div class="text-center mb-4">
                <i
                  class="bi bi-person-circle"
                  style="font-size: 48px; color: rgb(122, 165, 233)"
                ></i>

                <h3 class="fw-bold mt-3">Voter Login</h3>
                <p class="text-muted">Enter your credentials to vote</p>
              </div>

              <!-- Form -->
              <form>
                <div class="mb-3">
                  <label class="form-label">Voter ID</label>
                  <input
                    type="text"
                    name="id"
                    class="form-control form-control-lg"
                    placeholder="Enter your voter ID"
                  />
                </div>

                <div class="mb-4">
                  <label class="form-label">Password</label>
                  <input
                    type="password"
                    name="password"
                    class="form-control form-control-lg"
                    placeholder="Enter your password"
                  />
                </div>

                <button type="submit" name="btn" id="shinaBtn">
                  <i class="bi bi-box-arrow-in-right me-2"></i>
                  Login to Vote
                </button>
              </form>

              <!-- Register -->
              <div class="text-center">
                <a
                  href="voter-register.php"
                  class="btn btn-link text-decoration-none"
                >
                  Don’t have an account? Register
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
