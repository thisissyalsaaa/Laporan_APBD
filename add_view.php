<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Biro ADM Pembangunan</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
    body {
        font-family: 'Spectral', serif;
        background-color: #f4f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        width: 100%;
        max-width: 600px;
    }

    .card-header {
        background-color: #A52A2A;
        color: #fff;
        padding: 15px;
        border-radius: 8px 8px 0 0;
    }

    .card .card-header h5 {
        color: white;
    }

    .card-header h5 {
        margin: 0;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 4px;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .btn-primary {
        background-color: #A52A2A;
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data</h5>
        </div>
        <div class="card-body">
            <form action="add_process.php" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="nm_program">Nama Program</label>
                    <input type="text" id="nm_program" name="nm_program" class="form-control"
                        placeholder="Masukkan Nama Program" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="pagu">Pagu</label>
                    <input type="number" id="pagu" name="pagu" class="form-control" placeholder="Masukkan Pagu"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="targets">Nilai Target</label>
                    <input type="number" id="targets" name="targets" class="form-control" placeholder="Masukkan Target"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="realisasi">Realisasi</label>
                    <input type="number" id="realisasi" name="realisasi" class="form-control"
                        placeholder="Masukkan Realisasi" autocomplete="off" required>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.animateNumber.min.js"></script>
    <script src="assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="assets/js/google-map.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>