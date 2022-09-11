<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Listing Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/font-awesome.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="{{url('public')}}/assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('shop')}}" class="logo">
                            <img src="{{url('public')}}/assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('shop')}}">Home</a></li>
                            <li class="menu">
                                <ul>
                                <li class="scroll-to-section"><a href="#products">Check our Product's</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Halaman</a>
                                <ul>
                                <li><a href="{{url('shop-produk')}}">Produk</a></li>
                                <li><a href="{{url('detail')}}">detail</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="{{url('login')}}">Login</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
            <div class="col-md-12 mt-5">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
                <form action="{{ url('shop-produk/filter')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                    </div>
                    <button class="btn btn-dark float-right mt-1"><i class="fa fa-search"></i> Filter</button>
                </form>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                @foreach($list_produk as $produk)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="{{'detail'}}/{{$produk->id}}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{url('product')}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{url('public')}}/assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{$produk->nama}}</h4>
                            <span>Rp. {{number_format($produk->harga)}}</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="{{url('public')}}/assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="{{url('public')}}/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{url('public')}}/assets/js/popper.js"></script>
    <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{url('public')}}/assets/js/owl-carousel.js"></script>
    <script src="{{url('public')}}/assets/js/accordions.js"></script>
    <script src="{{url('public')}}/assets/js/datepicker.js"></script>
    <script src="{{url('public')}}/assets/js/scrollreveal.min.js"></script>
    <script src="{{url('public')}}/assets/js/waypoints.min.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{url('public')}}/assets/js/imgfix.min.js"></script> 
    <script src="{{url('public')}}/assets/js/slick.js"></script> 
    <script src="{{url('public')}}/assets/js/lightbox.js"></script> 
    <script src="{{url('public')}}/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="{{url('public')}}/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
