<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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

</head>

<body>
    <?php
        include('topbot\header.php')
    ?>

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
        <div class="google-maps mb-4">
        <iframe 
            src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31856.689016603046!2d98.64182209047269!3d3.5676528053113032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313020d05a0587%3A0x5de41e43c3a1ad90!2sToko%20Sinuraya!5e0!3m2!1sid!2sid!4v1734163923565!5m2!1sid!2sid 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>LAPORKAN MASALAH</h2>
                        <p>Jika Anda menemukan kendala atau masalah saat menggunakan layanan kami, silakan laporkan kepada kami. Masukan Anda sangat berarti untuk meningkatkan kualitas layanan kami.</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" style="padding:10px" placeholder="Nama Anda" required data-error="Isi Bagian Nama Anda! ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text"  style="padding:10px" placeholder="Email Anda" id="email" class="form-control" name="name" required data-error="Isi Bagian Email Anda!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name"  style="padding:10px" placeholder="Judul" required data-error="Isi Bagian Judul Anda!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Isi Pesan" rows="4" data-error="Isi Pesan Anda!" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Kirim Pesan</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p>Kami selalu siap untuk mendukung kebutuhan Anda. Jika Anda memiliki pertanyaan, saran, atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui informasi di bawah ini.</p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Alamat : Jl. Michael I. Days 9000 <br>Preston Street Wichita,<br> KS 87213 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>No.Telp : +62 8xx xxxx xxxx</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: contactinfo@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

    <?php
        include('topbot\footer.php')
    ?>
    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>