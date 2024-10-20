<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
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
                        <a class="nav-link" href="HomeRegistion.php">Home</a> <!-- Mengarahkan ke halaman registration -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Display_Data.php">View Data</a> <!-- Mengarahkan ke halaman display data -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Registered Users</h2>
            <a href="HomeRegistion.php" class="btn btn-primary">Tambah Data</a> <!-- Tombol Tambah Data -->
        </div>
        <?php
        require 'DataBase_conection.php';

        $sql = "SELECT id, email, name, institution, country, address FROM registration ORDER BY id ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Institution</th>
                            <th>Country</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["institution"] . "</td>
                        <td>" . $row["country"] . "</td>
                        <td>" . $row["address"] . "</td>
                        <td>
                            <a href='Edit_data.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='Delete_data.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>Tidak ada data yang ditemukan.</div>";
        }

        $conn->close();
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>