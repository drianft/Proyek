<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinuraya Admin | Dashboard</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <?php
        include('topbot/adminheader.php');
    ?>

    <div style="width: 90%; margin: 37px auto; text-align: center;">
        <h1 style="color: #333; margin-bottom: 20px;">Dashboard Admin</h1>
        <div style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">

            <!-- Kotak 1: Manajemen Produk -->
            <a href="adminproduk.php" style="text-decoration: none; color: inherit;">
                <div style="width: 100%; background-color: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; text-align: center;">
                    <img src="images/dasha2.png" alt="Manajemen Produk" style="width: 100%; height: 420px; object-fit: cover; border-radius: 5px;">
                    <h2 style="color: #4CAF50; font-size: 20px; margin: 10px 0;">Manajemen Produk</h2>
                    <p style="color: #555; font-size: 16px;">Kelola produk Anda dengan mudah, tambahkan atau perbarui stok.</p>
                </div>
            </a>

            <!-- Kotak 2: Cek Order -->
            <a href="#" style="text-decoration: none; color: inherit;">
                <div style="width: 100%; background-color: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; text-align: center;">
                    <img src="images/dasha3.png" alt="Cek Order" style="width: 100%; height: 420px; object-fit: cover; border-radius: 5px;">
                    <h2 style="color: #4CAF50; font-size: 20px; margin: 10px 0;">Cek Order</h2>
                    <p style="color: #555; font-size: 16px;">Pantau dan kelola pesanan dari pelanggan dengan cepat.</p>
                </div>
            </a>

            <!-- Kotak 3: Cek Laporan -->
            <a href="#" style="text-decoration: none; color: inherit;">
                <div style="width: 100%; background-color: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; text-align: center;">
                    <img src="images/dasha4.png" alt="Cek Laporan" style="width: 100%; height: 420px; object-fit: cover; border-radius: 5px;">
                    <h2 style="color: #4CAF50; font-size: 20px; margin: 10px 0;">Cek Laporan</h2>
                    <p style="color: #555; font-size: 16px;">Lihat laporan yang masuk untuk analisis bisnis Anda.</p>
                </div>
            </a>

        </div>
    </div>

    <?php
        include('topbot/adminfooter.php');
    ?>

</body>
</html>
