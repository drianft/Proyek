<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Sinuraya | Contact</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
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

    <title>Checkout</title>

</head>
<body>
    <?php
        include('topbot/header.php')
    ?>
    <div style="width: 90%; margin: 20px auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; margin-bottom: 20px; background-color: black; color: white; padding: 10px; border-radius: 4px;">Checkout</h1>

        <ul style="list-style: none; padding: 0; margin: 0 0 20px 0;">
            <li style="display: flex; align-items: center; margin-bottom: 15px; background-color: #fafafa; border-radius: 8px; padding: 10px; gap: 10px;">
                <img src="images/produkcontoh.jpg" alt="Produk 1" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                <div style="flex: 1;">
                    <p style="margin: 5px 0;"><strong>Produk 1</strong></p>
                    <p style="margin: 5px 0;">Rp 25.000.00 x 2</p>
                    <p style="margin: 5px 0;">Total: Rp 50.000.00</p>
                </div>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 15px; background-color: #fafafa; border-radius: 8px; padding: 10px; gap: 10px;">
                <img src="images/produkcontoh.jpg" alt="Produk 2" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                <div style="flex: 1;">
                    <p style="margin: 5px 0;"><strong>Produk 2</strong></p>
                    <p style="margin: 5px 0;">Rp 30.000.00 x 1</p>
                    <p style="margin: 5px 0;">Total: Rp 30.000.00</p>
                </div>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 15px; background-color: #fafafa; border-radius: 8px; padding: 10px; gap: 10px;">
                <img src="images/produkcontoh.jpg" alt="Produk 3" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                <div style="flex: 1;">
                    <p style="margin: 5px 0;"><strong>Produk 3</strong></p>
                    <p style="margin: 5px 0;">Rp 25.000.00 x 3</p>
                    <p style="margin: 5px 0;">Total: Rp 75.000.00</p>
                </div>
            </li>
        </ul>

        <div style="margin-bottom: 20px; background-color: #fafafa; border-radius: 8px; padding: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
            <p style="margin: 5px 0;"><strong>Nama Penerima:</strong> John Doe</p>
            <p style="margin: 5px 0;"><strong>Nomor Telepon:</strong> 08123456789</p>
            <p style="margin: 5px 0;"><strong>Alamat:</strong> Jl. Contoh Alamat No. 123, Jakarta</p>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="payment-method" style="display: block; margin-bottom: 5px;">Metode Pembayaran:</label>
            <select id="payment-method" style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #cccccc;">
                <option value="">Pilih</option>
                <option value="COD">COD</option>
                <option value="Transfer">Transfer</option>
            </select>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="message" style="display: block; margin-bottom: 5px;">Pesan:</label>
            <textarea id="message" rows="4" placeholder="Tulis semua pesan kamu disini! (Ukuran, Varian, dsb)" style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #cccccc;"></textarea>
        </div>

        <p style="font-weight: bold; color: red; margin-bottom: 20px;">Total Harga: Rp 155.000.00</p>
        <button id="buy-now" style="width: 100%; padding: 10px; background-color: black; color: white; border: none; border-radius: 4px; cursor: pointer; text-align: center;">Beli sekarang</button>
    </div>

    <div id="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center;">
        <div style="background-color: white; padding: 20px; border-radius: 8px; text-align: center;">
            <p style="font-size: 18px; color: red; font-weight: bold;">Pilih metode pembayaran</p>
            <p style="margin: 10px 0;">Kamu harus memilih metode pembayaran</p>
            <button id="close-modal" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; text-align: center;">OK</button>
        </div>
    </div>

    <!-- Nanti ini PHPnya disesuaikan ama role ya, yg gdk role itu untuk guest, sisanya ada nama rolenya, adminfooter, buyerheader dst -->
    <?php
        include('topbot/footer.php');
    ?>

    <script>
        document.getElementById('buy-now').addEventListener('click', function() {
            const paymentMethod = document.getElementById('payment-method').value;
            if (!paymentMethod) {
                document.getElementById('modal').style.display = 'flex';
            }
        });

        document.getElementById('close-modal').addEventListener('click', function() {
            document.getElementById('modal').style.display = 'none';
        });
    </script>
</body>
</html>
