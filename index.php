<!DOCTYPE html>
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
    <div class="container-fluid p-0">
      <div class="row min-vh-100 g-0">
        <!-- LEFT SECTION -->
        <div
          class="col-md-5 text-white d-flex align-items-center"
          style="background-color: rgb(122, 165, 233)"
        >
          <div class="text-center px-4 w-100">
            <div class="mb-4">
              <i class="bi bi-person-check fs-1"></i>
            </div>

            <h1 class="fw-bold mb-3">Ayobo Community</h1>
            <h2 class="h4 mb-4">Online Voting System</h2>

            <p class="lead text-white-50">
              Make your voice heard. Vote for your community leaders.
            </p>
          </div>
        </div>

        <!-- RIGHT SECTION -->
        <div class="col-md-7 d-flex align-items-center justify-content-center">
          <div class="w-75">
            <div class="text-center text-primary mt-4 mb-2">
              <i
                class="bi bi-box-arrow-in-right fs-1"
                style="color: rgb(122, 165, 233)"
              ></i>
            </div>
            <div class="card shadow-lg border-0 mb-4">
              <div class="card-body p-4">
                <h5 class="card-title mb-4 text-center">Choose Your Role</h5>

                <a href="voter-login.html" id="btnOne">
                  <i class="bi bi-person"></i>
                  Voter Login
                </a>

                <a href="admin-login.html" id="btnTwo">
                  <i class="bi bi-lock"></i>
                  Admin Login
                </a>
              </div>
            </div>

            <div class="text-center">
              <p class="text-muted">
                Don't have an account?
                <a href="voter-register.html" class="btn btn-link text-primary p-0 ms-2">
                  Register here
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
