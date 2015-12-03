<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mata Pancing</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

        /*-------------------
        -----News Styles-----
        ---------------------*/    
        .timeline{
            position:relative;
            margin-bottom:100px;
            z-index:1;
        }

        .timeline:before{
            display:block;
            content:"";
            position:absolute;
            width:50%;
            height:100%;
            left:1px;
            top:0;
            border-right:1px solid #5CC9DF;
            z-index:-1;
            background-color: #fff;
        } 

        .timeline:after{
            display:block;
            content:"";
            position:absolute;
            width:50%;
            height:100px;
            left:0px;
            bottom:-105px;
            border-right:1px dashed #5CC9DF;
            z-index:-1;
        } 

        .timeline .date-title{
            text-align:center;
            margin:70px 0 50px;
        }

        .timeline .date-title span{
            padding:15px 30px;
            font-size:21px;
            font-weight:400;
            color:#fff;
            background:#5CC9DF;
            border-radius:5px;
        }

        .news-item {
            padding-bottom:45px;
        }

        .news-item.right {
            float:right;
            margin-top:40px;
        }

        .news-item .news-content {
            margin:20px 30px 0 0;
            position:relative;
            padding:30px;
            padding-left:100px;
            background:#f5f5f5;
            border-radius:10px;
            box-shadow:-5px 5px 0 rgba(0,0,0,0.08);
            -webkit-transition:all .3s ease-out;
            transition:all .3s ease-out;
        }

        .news-item:hover .news-content {
            background:#5CC9DF;
            color:#fff;
        }

        .news-item.right .news-content {
            margin:20px 0 0 30px;
            box-shadow:5px 5px 0 rgba(0,0,0,0.08);
        }

        .news-item .news-content:after {
            display:block;
            content:"";
            position:absolute;
            top:50px;
            right:-40px;
            width:0px;
            height:0px;
            background:transparent;
            border:20px solid transparent;
            border-left:20px solid #f5f5f5;
            -webkit-transition:border-left-color .3s ease-out;
            transition:border-left-color .3s ease-out;
        }

        .news-item.right .news-content:after {
            position:absolute;
            left:-40px;
            right:auto;
            border-left:20px solid transparent;
            border-right:20px solid #f5f5f5;
            -webkit-transition:border-right-color .3s ease-out;
            transition:border-right-color .3s ease-out;
        }

        .news-item:hover .news-content:after {
            border-left-color:#5CC9DF;
        }

        .news-item.right:hover .news-content:after {
            border-left-color:transparent;
            border-right-color:#5CC9DF;
        }

        .news-item .news-content:before {
            display:block;
            content:"";
            position:absolute;
            width:20px;
            height:20px;
            right:-55px;
            top:60px;
            background:#5CC9DF;
            border:3px solid #fff;
            border-radius:50%;
            -webkit-transition:background .3s ease-out;
            transition:background .3s ease-out;
        }

        .news-item.right .news-content:before {
            left:-55px;
            right:auto;
        }

        .news-content .date {
            position:absolute;
            width:80px;
            height:80px;
            left:10px;
            text-align:center;
            color:#5CC9DF;
            -webkit-transition:color .3s ease-out;
            transition:color .3s ease-out;
        }

        .news-item:hover .news-content .date {
            color:#fff;
        }

        .news-content .date p{
            margin:0;
            font-size:48px;
            font-weight:600;
            line-height:48px;
        }

        .news-content .date small{
            margin:0;
            font-size:26px;
            font-weight:300;
            line-height:24px;
        }

        .news-content .news-title{
            font-size:24px;
            font-weight:300;
        }

        .news-content p{
            font-size:16px;
            line-height:24px;
            font-weight:300;
            letter-spacing:0.02em;
            margin-bottom:10px;
        }

        .news-content .read-more,
        .news-content .read-more:hover,
        .news-content .read-more:active,
        .news-content .read-more:focus{
            padding:10px 0;
            text-decoration:none;
            font-size:16px;
            color:#7A7C7F;
            line-height:24px;
        }

        .news-item:hover .news-content .read-more,
        .news-item:hover .news-content .read-more:hover,
        .news-item:hover .news-content .read-more:active,
        .news-item:hover .news-content .read-more:focus{
            color:#fff;
        }

        .news-content .read-more{
            -webkit-transition:padding .3s ease-out;
            transition:padding .3s ease-out;
        }

        .news-content .read-more:hover {
            padding-left:7px;
        }

        .news-content .read-more:after{
            content:'\f054';
            padding-left:15px;
            font-family:'FontAwesome';
            font-size:21px;
            line-height:21px;
            color:#5CC9DF;
            vertical-align:middle;
            -webkit-transition:padding .3s ease-out;
            transition:padding .3s ease-out;
        }

        .news-content .read-more:hover:after{
            padding-left:20px;
        }

        .news-item:hover .news-content .read-more:after{
            color:#fff;
        }

        .news-content .news-media{
            position:absolute;
            width:80px;
            bottom:-45px;
            right:40px;
            border-radius:8px;
        }

        .news-content .news-media img{
            border-radius:8px;
            transform:scale(1);
            -webkit-transition:-webkit-transform .3s ease-out;
            transition:transform .3s ease-out;
        }

        .news-content .news-media a{
            display:block;
            text-decoration:none;
            background:#fff;
            border-radius:8px;
            overflow:hidden;
            -webkit-mask-image: -webkit-radial-gradient(circle, white, black);
        }

        .news-content .news-media a:hover img{
            -webkit-transform:scale(1.3);
            transform:scale(1.3);
        }

        .news-content .news-media a:after{
            content:'\f065';
            position:absolute;
            width:100%;
            top:0;
            left:0;
            font-family:FontAwesome;
            font-size:32px;
            line-height:80px;
            text-align:center;
            color:#5CC9DF;
            -webkit-transform:scale(0);
            transform:scale(0);
            opacity:0;
            -webkit-transition:all .2s ease-out .1s;
            transition:all .2s ease-out .1s;
        }

        .news-content .news-media.video a:after{
            content:'\f04b';
        }

        .news-content .news-media a:hover:after{
            -webkit-transform:scale(1);
            transform:scale(1);
            opacity:1;
        }

        .news-content .news-media.gallery{
            box-shadow:4px 4px 0 #bbb,8px 8px 0 #ddd;
        }
                                                
    </style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Mata Pancing</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#portfolio">Produk Unggulan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#belanja">Cara Belanja</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Kontak</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kirim Pesan</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Selamat Datang di Website Kami</div>
                <div class="intro-heading">Mata Pancing Dot Com</div>
                <a href="#portfolio" class="page-scroll btn btn-xl">Lihat Produk</a>
            </div>
        </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Produk</h2>
                    <h3 class="section-subheading text-muted">Kualitas baik harga bersahabat.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="public/img/portfolio/shimano.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="public/img/portfolio/lesath.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="public/img/portfolio/scorpion.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="public/img/portfolio/poison.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="public/img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="public/img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="belanja">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="container bootstrap snippet">
                            <div class="timeline">
                                <div class="date-title"> 
                                    <span>CARA BERTRANSAKSI DI WEB KAMI</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 news-item">
                                        <div class="news-content">
                                            <div class="date">
                                                <small>STEP</small><p>1</p> 
                                            </div>
                                            <h2 class="news-title">Memilih produk yang di inginkan</h2>
<!-- 
                                            <div class="news-media"> 
                                                <a class="colorbox cboxElement" href="#"> 
                                                    <img class="img-responsive" src="http://lorempixel.com/400/400/sports/1/" alt=""> 
                                                </a>
                                            </div> -->

                                            <p>Catatlah kode produk beserta quantity pembelian yang anda inginkan.</p> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6 news-item right">
                                        <div class="news-content">
                                            <div class="date">
                                                <small>STEP</small> <p>2</p>
                                            </div>
                                            <h2 class="news-title">Kirim pesan</h2>

                                    <!--         <div class="news-media gallery"> 
                                                <a class="colorbox cboxElement" href="#"> 
                                                    <img class="img-responsive" src="http://lorempixel.com/400/400/sports/2/" alt=""> 
                                                </a>
                                            </div> -->

                                            <p>Kirimkan daftar kode produk yang ingin di beli beserta jumlah order, melalui menu kirim pesan.</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 news-item">
                                        <div class="news-content">
                                            <div class="date">
                                                <small>STEP</small> <p>3</p>
                                            </div>
                                            <h2 class="news-title">Pembayaran</h2>

                                         <!--    <div class="news-media gallery"> 
                                                <a class="colorbox cboxElement" href="#"> 
                                                    <img class="img-responsive" src="http://lorempixel.com/400/400/sports/2/" alt=""> 
                                                </a>
                                            </div> -->

                                            <p>
                                                Lakukan pembayaran produk beserta ongkos kirim melalui transfer bank.<br />
                                                Nama Bank : Mandiri<br />
                                                Atas Nama : CV. Mata Pancing<br />
                                                No Rekening : 1234567890123456
                                            </p> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6 news-item right">
                                        <div class="news-content">
                                            <div class="date">
                                                <small>STEP</small><p>4</p> 
                                            </div>
                                            <h2 class="news-title">Konfirmasi pembayaran</h2>

                                         <!--    <div class="news-media"> 
                                                <a class="colorbox cboxElement" href="#"> 
                                                    <img class="img-responsive" src="http://lorempixel.com/400/400/sports/1/" alt=""> 
                                                </a>
                                            </div> -->

                                            <p>Kirim bukti transfer ke email mata.pancing@gmail.com.</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 news-item">
                                        <div class="news-content">
                                            <div class="date">
                                                <small>STEP</small> <p>5</p>
                                            </div>
                                            <h2 class="news-title">Menunggu proses pengiriman</h2>

                                          <!--   <div class="news-media gallery"> 
                                                <a class="colorbox cboxElement" href="#"> 
                                                    <img class="img-responsive" src="http://lorempixel.com/400/400/sports/2/" alt=""> 
                                                </a>
                                            </div> -->

                                            <p>Setiap konfirmasi transfer, anda akan mendapat nomor resi pengiriman barang melalui email atau melalui handphone.</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontak Kami</h2>
                    <h3 class="section-subheading text-muted">Hubungi kami untuk request atau bertanya seputar produk.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="public/img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Mohamad Sholihin</h4>
                        <p class="text-muted">Support</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/sholihin_" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/mohamad.sholihinl.it" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://id.linkedin.com/in/mohamad-sholihin-350b2761" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="public/img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ade Dhandi</h4>
                        <p class="text-muted">Owner</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="public/img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Muhammad Wahyudi Ramadhan</h4>
                        <p class="text-muted">Marketing</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           <!--  <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="public/img/logos/logo-shimano.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="public/img/logos/logo-lesath.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="public/img/logos/logo-poison.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="public/img/logos/logo-scorpion.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kirim Pesan</h2>
                    <h3 class="section-subheading text-muted">Pesan yang anda kirimkan akan segera kami tanggapi.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="/" method="post" novalidate>
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">Copyright &copy; matapancin.com 2015 Design by <a href="https://plus.google.com/u/0/114615930201401957677">Mohamad Sholihin</a></span>
                </div>
                <div class="col-md-6f">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="public/img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="public/img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="public/img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="public/img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="public/img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="public/img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="public/js/jquery.easing.min.js"></script>
    <script src="public/js/classie.js"></script>
    <script src="public/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="public/js/jqBootstrapValidation.js"></script>
    <!--<script src="public/js/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="public/js/agency.js"></script>

    @if(Session::has('message')) 

        @if(Session::get('message') == 'success')

            <script type="text/javascript">
                $(function(){
                    $('#successModal').modal('show');
                });
            </script>

        @endif
    @endif

    <div id="successModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- dialog body -->
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            Pesan Berhasil di kirim..
          </div>
          <!-- dialog buttons -->
          <div class="modal-footer"><button type="button" class="btn btn-primary">Ok</button></div>
        </div>
      </div>
    </div>

</body>

</html>
