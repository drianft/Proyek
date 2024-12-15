<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinuraya Admin | Management</title>
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

<div class="container" style="width: 80%; margin: 20px auto; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #333; margin-bottom: 20px;">Manajemen Produk</h1>

    <form id="productForm" onsubmit="return handleSubmit()">
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="productName" style="font-weight: bold; display: block; margin-bottom: 8px; color: #555;">Nama Produk</label>
            <input type="text" id="productName" name="productName" required style="width: 100%; padding: 12px 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; margin-top: 8px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="productPrice" style="font-weight: bold; display: block; margin-bottom: 8px; color: #555;">Harga Produk</label>
            <input type="number" id="productPrice" name="productPrice" required style="width: 100%; padding: 12px 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; margin-top: 8px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
    <label for="productDesc" style="font-weight: bold; display: block; margin-bottom: 8px; color: #555;">Deskripsi Produk</label>
    <textarea id="productDesc" name="productDesc" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; margin-top: 8px; resize: vertical; overflow: auto; height: 100px;"></textarea>
</div>


        <div class="form-group" style="margin-bottom: 20px;">
            <label for="productQuantity" style="font-weight: bold; display: block; margin-bottom: 8px; color: #555;">Kuantitas Stok</label>
            <input type="number" id="productQuantity" name="productQuantity" required style="width: 100%; padding: 12px 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; margin-top: 8px;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="productCategory" style="font-weight: bold; display: block; margin-bottom: 8px; color: #555;">Kategori Produk</label>
            <select id="productCategory" name="productCategory" required style="width: 100%; padding: 12px 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; margin-top: 8px;">
                <option value="">Pilih Kategori</option>
                <option value="elektronik">Elektronik</option>
                <option value="pakaian">Pakaian</option>
                <option value="makanan">Makanan</option>
            </select>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <button type="submit" style="width: 100%; padding: 12px; background-color: #4CAF50; color: white; font-size: 18px; border: none; border-radius: 5px; cursor: pointer;">Tambahkan/Perbarui Produk</button>
        </div>
    </form>

    <a href="#" class="view-all" style="display: block; text-align: right; margin-top: 10px; color: #888; text-decoration: none; font-size: 16px;">Lihat Semua Produk</a>

    <div class="message" id="message" style="text-align: center; margin-top: 20px; font-size: 18px; font-weight: bold; color: #4CAF50;"></div>
</div>

    <?php
        include('topbot/adminfooter.php');
    ?>

<script>
    function handleSubmit() {
        // Mencegah form untuk reload halaman
        event.preventDefault();

        // Ambil nilai input form
        const productName = document.getElementById('productName').value;
        const productPrice = document.getElementById('productPrice').value;
        const productQuantity = document.getElementById('productQuantity').value;
        const productCategory = document.getElementById('productCategory').value;

        // Validasi input (jika diperlukan)
        if (!productName || !productPrice || !productQuantity || !productCategory) {
            alert("Semua kolom harus diisi!");
            return false;
        }

        // Simulasi penyimpanan data
        const message = `Produk berhasil ditambahkan! 
        Nama: ${productName}, 
        Harga: Rp${productPrice}, 
        Stok: ${productQuantity}, 
        Kategori: ${productCategory}`;

        // Tampilkan pesan sukses
        document.getElementById('message').innerText = message;

        // Reset form setelah submit
        document.getElementById('productForm').reset();

        return true;
    }
</script>

</body>
</html>
