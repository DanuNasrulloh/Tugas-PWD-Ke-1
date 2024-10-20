<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="StyleHalamanRegistration.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-bordered card">
        <div class="container-fluid">
            <a class="navbar-brand" href="login.php">Login</a> <!-- Mengarahkan ke halaman login -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="HomeRegistion.php">Home</a> <!-- Mengarahkan ke halaman registration -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Display_Data.php">View Data</a> <!-- Mengarahkan ke halaman display data -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-7">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="text-uppercase">Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == 'email_exists') {
                            echo '<div class="alert alert-danger" role="alert">Email sudah terdaftar. Silakan gunakan email lain.</div>';
                        }
                        ?>
                        <form action="process_registration.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="institution">Institution</label>
                                <input type="text" name="institution" id="institution" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm w-auto mx-auto d-block btn-register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>