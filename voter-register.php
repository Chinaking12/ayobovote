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
    <link rel="stylesheet" href="../all.css" />

    <title>Voter Registration | Ayobo Community</title>
  </head>

  <body>
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <!-- Back to Home -->
          <a href="index.html" class="btn btn-link text-decoration-none mb-3">
            <i class="bi bi-chevron-left me-1"></i>
            Back to Home
          </a>

          <!-- Registration Card -->
          <div class="card shadow-lg border-0">
            <div class="card-body p-5">
              <!-- Header -->
              <div class="text-center mb-4">
                <i
                  class="bi bi-people-fill"
                  style="font-size: 48px; color: #198754"
                ></i>

                <h3 class="fw-bold mt-3">Voter Registration</h3>
                <p class="text-muted">
                  Register to participate in Ayobo community voting
                </p>
              </div>

              <!-- Form -->
              <form
                action="../process/process_voter_register.php"
                method="post"
              >
                <div class="mb-3">
                  <label class="form-label">Full Name</label>
                  <input
                    type="text"
                    name="fullname"
                    class="form-control"
                    placeholder="Enter your full name"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label class="form-label">Email Address</label>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="your.email@example.com"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label class="form-label">Phone Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    name="telephone"
                    placeholder="080XXXXXXXX"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label class="form-label">Address in Ayobo</label>
                  <textarea
                    class="form-control"
                    rows="2"
                    name="address"
                    placeholder="Your residential address"
                    required
                  ></textarea>
                </div>

                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Create a password"
                    required
                  />
                </div>

                <div class="mb-4">
                  <label class="form-label">Confirm Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="confirmP"
                    placeholder="Confirm your password"
                    required
                  />
                </div>

                <button
                  type="submit"
                  name="btn"
                  class="btn btn-success btn-lg w-100"
                >
                  <i class="bi bi-person-plus-fill me-2"></i>
                  Register
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
