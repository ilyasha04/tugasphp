<?php
// Set variabel-variabel informasi profil
$nama = "Ilyasha Erfrian";
$email = "ilyasha789@gmail.com";
$phone = "+6289639569075";
$address = "Jl. Taman Bukit Duri, Jakarta";
$umur = 22;
$occupation = "Peserta MSIB 6 Fullstack Web Developer";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        My Profile
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">About Me</h5>
                        <p class="card-text">
                            <strong>Name:</strong> <?php echo $nama; ?><br>
                            <strong>Email:</strong> <?php echo $email; ?><br>
                            <strong>Phone:</strong> <?php echo $phone; ?><br>
                            <strong>Address:</strong> <?php echo $address; ?><br>
                            <strong>Age:</strong> <?php echo $umur; ?><br>
                            <strong>Occupation:</strong> <?php echo $occupation; ?><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
