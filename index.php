<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid" style="background-color: #f1f8ff;">
        <!-- code start   -->
        <!-- contact start  -->

        <!-- contact end  -->

        <!-- navbar start  -->
        <nav class="navbar navbar-expand-lg  row" style="background-color: #6861bc;position: sticky;">
            <div class="container-fluid px-md-5 py-md-2">
                <a class="navbar-brand col-md-3 text-center fw-bolder text-white fs-1 " style="font-family: italic;"
                    href="index.php">Buy R sell</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <style>
                    li{
                        transition: all .2s ease-in-out ;
                        font-family:'roman';
                        font-size:20px;
                        color:rgba(219, 227, 234, 0.477);
                    }
                    ul>li:hover {
                        
                        text-shadow: 2px 2px 2px black;
                       color:rgba(219, 227, 234, 1);
                       font-size:22px;
                       text-decoration:underline;
                    }
                </style>
                    <ul class="navbar-nav ms-md-auto mb-lg-0 ">



                        <li class="nav-item">
                            <a class="nav-link  text-white " href="./products.php">All products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white " href="./addproduct.php">Add Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white " href="#">My produts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white " href="#happycustomer">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white " href="#aboutsection">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white " href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white " href="./mycartpage.php">My cart</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
       
         <!-- new carasole start  -->
          <?php 
          include('./carasoul-animation.php');
          ?>
         <!-- new carasole end  -->

        <!-- course section start  -->
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="d-flex  justify-content-center">
                </div>
                <h2 class="text-center">
                    Popular Course
                </h2>
                <p class="text-center" style="font-family:arial;font-size:30px;">Indias best platform for buying or perchasing your daily need products <br>
                    great discount<br>
                    great profit
                </p>

          



                <div class="row mx-1 d-flex justify-content-center align-items-center  cat ">

                    <div class="col-md-3 shadow mx-2" style="background-color: white;">
                        <div>
                            <!-- img  -->
                            <img src="./images/products/p1.jpg" class="rounded-2 w-100 my-3" alt="">
                        </div>
                        <h3 class="m-3">Girls Creams</h3>

                        <div class="row col-9 px-3">
                            <h5>Prize : <span>$100</span> </h5>
                        </div>
                        <hr>
                        <ul class="row list-unstyled p-1">
                            <li class="col">
                                888
                            </li>
                            <li class="col">
                                1.7k
                            </li>
                            <li class="col">
                                Free
                            </li>
                        </ul>
                    </div>


                    <div class="col-md-3 shadow mx-2" style="background-color: white;">
                        <div>
                            <!-- img  -->
                            <img src="./images/products/p10.jpg" class="rounded-2 w-100 my-3" alt="">
                        </div>
                        <h3 class="m-3">Mr.Bean's Car</h3>

                        <div class="row col-9">
                            <div class="col  d-flex flex-column justify-content-center">
                                <div class="row col-9 px-3">
                                    <h5>Prize : <span>$100</span> </h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ul class="row list-unstyled p-1">
                            <li class="col">
                                888
                            </li>
                            <li class="col">
                                1.7k
                            </li>
                            <li class="col">
                                Free
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 shadow mx-2" style="background-color: white;">
                        <div>
                            <!-- img  -->
                            <img src="./images/products/p3.jpg" class="rounded-2 w-100 my-3" alt="">
                        </div>
                        <h3 class="m-3">TVS Bike</h3>

                        <div class="row col-9">
                            <div class="col  d-flex flex-column justify-content-center">
                                <div class="row col-9 px-3">
                                    <h5>Prize : <span>$100</span> </h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ul class="row list-unstyled p-1">
                            <li class="col">
                                888
                            </li>
                            <li class="col">
                                1.7k
                            </li>
                            <li class="col">
                                Free
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 shadow mx-2" style="background-color: white;">
                        <div>
                            <!-- img  -->
                            <img src="./images/products/p6.jpg" class="rounded-2 w-100 my-3" alt="">
                        </div>
                        <h3 class="m-3">Mountain Cycle</h3>

                        <div class="row col-9">
                            <div class="col  d-flex flex-column justify-content-center">
                                <div class="row col-9 px-3">
                                    <h5>Prize : <span>$100</span> </h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ul class="row list-unstyled p-1">
                            <li class="col">
                                888
                            </li>
                            <li class="col">
                                1.7k
                            </li>
                            <li class="col">
                                Free
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 shadow mx-2" style="background-color: white;">
                        <div>
                            <!-- img  -->
                            <img src="./images/products/p5.jpg" class="rounded-2 w-100 my-3" alt="">
                        </div>
                        <h3 class="m-3">Drone Parts</h3>

                        <div class="row col-9">
                            <div class="col  d-flex flex-column justify-content-center">
                                <div class="row col-9 px-3">
                                    <h5>Prize : <span>$100</span> </h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ul class="row list-unstyled p-1">
                            <li class="col">
                                888
                            </li>
                            <li class="col">
                                1.7k
                            </li>
                            <li class="col">
                                Free
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 shadow mx-2" style="background-color: white;">
                        <div>
                            <!-- img  -->
                            <img src="./images/products/p7.jpg" class="rounded-2 w-100 my-3" alt="">
                        </div>
                        <h3 class="m-3">Number Of One..</h3>

                        <div class="row col-9">
                            <div class="col  d-flex flex-column justify-content-center">
                                <div class="row col-9 px-3">
                                    <h5>Prize : <span>$100</span> </h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ul class="row list-unstyled p-1">
                            <li class="col">
                                888
                            </li>
                            <li class="col">
                                1.7k
                            </li>
                            <li class="col">
                                Free
                            </li>
                        </ul>
                    </div>


                </div>

            </div>
            <!-- course section end  -->

            <!-- main feature start -->
            <div class="row my-5 ">
                <div class="col offset-1">
                    <div class="row">


                        <div class="col-md-5 d-flex flex-column justify-content-center align-items-center gap-1">
                            <div class="d-flex justify-content-center">
                            </div>
                            <h2 class="text-center">
                                Co-Powered by
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet
                                elit
                                dolor sit amet elit.Lorem
                                ipsum dolor sit amet elit.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Ajio</h3>
                                    <p>Lorem ipsum dolor sit amet elit consectetur adipiscing sed.</p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Mintra</h3>
                                    <p>Lorem ipsum dolor sit amet elit consectetur adipiscing sed.</p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Flipkart</h3>
                                    <p>Lorem ipsum dolor sit amet elit consectetur adipiscing sed.</p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Amzon</h3>
                                    <p>Lorem ipsum dolor sit amet elit consectetur adipiscing sed.</p>
                                </div>


                            </div>

                        </div>
                        <div class="col">
                            <img src="./images/products/p12.jpg" class="img-fluid rounded-3" alt="" style="">

                        </div>
                    </div>
                </div>

            </div>
            <!-- main feature end -->

            <!-- teachers section start  -->

            <div class="row" style="background-color: #f6f6f6;">
                
                <div class="col">
                    <div class="">
                        
                        <h3 class="mx-5">Top Deals</h3>
                        <!-- <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit
                            dolor <br>
                            sit amet elit.
                        </p> -->
                    </div>
                    
                </div>
                
                
                <marquee scrollamount="30">
                <div class="row gap-5 d-flex justify-content-center align-items-center p-5">
                        
                        <div class="col-md-2 shadow rounded-2">
                            <div class=" d-flex align-items-center py-3">
                                <img src="./images/products/p8.jpg" class="img-fluid rounded-2" alt="">
                            </div>
                            <div class="text-center py-md-4">
                                <h4>
                                    Nano
                                </h4>
                                <h6>
                                more milage
                            </h6>
                        </div>
                        
                    </div>
                    <div class="col-md-2 shadow rounded-2">
                        <div class="d-flex align-items-center py-3">
                            <img src="./images/products/p9.jpg" class="img-fluid rounded-2" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4>
                                Suzuki
                            </h4>
                            <h6>
                                in cheep rate 
                            </h6>
                        </div>
                        
                    </div>
                    <div class="col-md-2 shadow rounded-2">
                        <div class="d-flex align-items-center py-3">
                            <img src="./images/products/p10.jpg" class="img-fluid rounded-2" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4>
                                Car
                            </h4>
                            <h6>
                                in best Offer
                            </h6>
                        </div>
                        
                    </div>
                    <div class="col-md-2 shadow rounded-2">
                        <div class=" d-flex align-items-center py-3">
                            <img src="./images/products/p3.jpg" class="img-fluid rounded-2" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4>
                                Scooty
                            </h4>
                            <h6>
                                more milage
                            </h6>
                        </div>
                        
                    </div>
                    <div class="col-md-2 shadow rounded-2">
                        <div class=" d-flex align-items-center py-3">
                            <img src="./images/products/p5.jpg" class="img-fluid rounded-2" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4>
                                Mounting Cycle
                            </h4>
                            <h6>
                                best offer
                            </h6>
                        </div>
                        
                    </div>
</marquee>
                 <!-- second section  -->

                 <marquee  behavior="" direction="right" scrollamount="30">
                        <div class="d-flex  gap-5">
                                
                                
                                <div class="col-md-2 shadow rounded-2">
                                    <div class=" d-flex align-items-center py-3">
                                        <img src="./images/products/p6.jpg" class="img-fluid rounded-2" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h4>
                                            Al-Malik
                                        </h4>
                                        <h6>
                                            SENIOR TEACHER
                                        </h6>
                                </div>
                                
                            </div>
                            <div class="col-md-2 shadow rounded-2">
                                <div class=" d-flex align-items-center py-3">
                                    <img src="./images/products/p8.jpg" class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="text-center py-4">
                                    <h4>
                                        Red car
                                    </h4>
                                    <h6>
                                        newly cars
                                    </h6>
                                </div>
                                
                            </div>
                            <div class="col-md-2 shadow rounded-2">
                                <div class=" d-flex align-items-center py-3">
                                    <img src="./images/products/p6.jpg" class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="text-center py-4">
                                    <h4>
                                    TVS bikes
                                </h4>
                                <h6>
                                    newly Bikes
                                </h6>
                            </div>
                            
                        </div>
                        <div class="col-md-2 shadow rounded-2">
                            <div class=" d-flex align-items-center py-3">
                                <img src="./images/products/p7.jpg" class="img-fluid rounded-2" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4>
                                    drone part
                                </h4>
                                <h6>
                                    best deals
                                </h6>
                            </div>
                            
                        </div>
                         <div class="col-md-2 shadow rounded-2">
                                <div class=" d-flex align-items-center py-3">
                                    <img src="./images/products/p8.jpg" class="img-fluid rounded-2" alt="">
                                </div>
                                <div class="text-center py-4">
                                    <h4>
                                        Red car
                                    </h4>
                                    <h6>
                                        newly cars
                                    </h6>
                                </div>
                                
                            </div>
                             
                        
                        
                        
                        
                    </marquee>
                    </div>
                
            </div>
        </div>
    </div>
        <!-- teachers section end  -->
        
        <!-- our portfolio start  -->
        
            <div class="row">
                <div class="col-12 m-2">
                    <!-- <div class="d-flex align-content-center justify-content-center">
                        <button class="btn btn-danger">Gallery</button>
                    </div> -->
                    <div>
                        <h3 class="text-center">Special Offers !</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod
                            <br> tempor sit amet
                            elit dolor sit amet elit.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="gallery col offset-2">


                        <div class="row  gap-3 gx-3 p-3 p-md-3">

                            <div class="col-md-3 ">
                                <img src="./images/banner/flipkartbanner1.webp" class="img-fluid rounded-2 " alt=""
                                    style="width: 500px !important;">
                            </div>
                            <div class="col-md-3">
                                <img src="./images/banner/flipkartbanner2.webp" class="img-fluid rounded-2 w-50" alt=""
                                    style="width: 500px !important;">
                            </div>
                            <div class="col-md-3">
                                <img src="./images/banner/flipkartbanner3.webp" class="img-fluid rounded-2 w-50" alt=""
                                    style="width: 500px !important;">
                            </div>


                            <div class="col-md-3 ">
                                <img src="./images/banner/flipkartbanner4.webp" class="img-fluid rounded-2 w-50" alt=""
                                    style="width: 500px !important;">
                            </div>
                            <div class="col-md-3">
                                <img src="./images/banner/flipkartbanner5.webp" class="img-fluid rounded-2 w-50" alt=""
                                    style="width: 500px !important;">
                            </div>
                            <div class="col-md-3">
                                <img src="./images/banner/flipkartbanner1.webp" class="img-fluid rounded-2 w-50" alt=""
                                    style="width: 500px !important;">
                            </div>



                        </div>



                    </div>
                </div>



            </div>

            <!-- our portfolio end  -->


            <!-- counts start  -->



            <div class="row col-sm-10 offset-1 my-5 text-center text-sm-start"
                style="background-color: #f1f8ff !important;">

                <div class="col-sm-3 my-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <div style="width: 100px;border-radius: 50%;height: 100px;background-color: white;">
                                <img src="https://rukminim1.flixcart.com/flap/80/80/image/29327f40e9c4d26b.png?q=100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h4>1,500</h4>
                            <h4>Total Teacher</h4>
                        </div>

                    </div>
                </div>

                <div class="col-sm-3 my-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <div style="width: 100px;border-radius: 50%;height: 100px;background-color: white;">
                                <img src="https://rukminim1.flixcart.com/flap/80/80/image/22fddf3c7da4c4f4.png?q=100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h4>1,500</h4>
                            <h4>Total Teacher</h4>
                        </div>

                    </div>
                </div>

                <div class="col-sm-3 my-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <div style="width: 100px;border-radius: 50%;height: 100px;background-color: white;">
                                <img src="https://rukminim1.flixcart.com/fk-p-flap/80/80/image/0d75b34f7d8fbcb3.png?q=100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h4>1,500</h4>
                            <h4>Total Teacher</h4>
                        </div>

                    </div>
                </div>

                <div class="col-sm-3 my-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <div style="width: 100px;border-radius: 50%;height: 100px;background-color: white;">
                                <img src="https://rukminim1.flixcart.com/fk-p-flap/80/80/image/0139228b2f7eb413.jpg?q=100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h4>1,500</h4>
                            <h4>Total Teacher</h4>
                        </div>

                    </div>
                </div>



            </div>
            <!-- counts end  -->

            <!-- our courses start  -->
            <div class="row text-center d-flex justify-content-center" id="happycustomer">

                <div>
                    <h2>Happy Customer</h2>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit , consectetur adipiscing , <br> sed eiusmod tempor sit amet elit
                    dolor
                    sit amet elit.
                </p>

                <div class="row text-start my-3 gap-4">
                    <div class="col-sm-3 offset-md-1 shadow">
                        <img src="https://themesfamily.com/tm/tawwab/assets/img/blog/3.jpg" class="img-fluid rounded-2"
                            alt="">
                        <h3>Rakshak</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestiae ad eos
                            repellat molestias atque quisquam nisi, placeat doloremque quas.
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h6>Years</h6>
                                <p>25-40</p>
                            </div>
                            <div class="col">
                                <h6>Size</h6>
                                <p>25-40</p>
                            </div>
                            <div class="col">
                                <h6>Class Time</h6>
                                <p>8.00Am-5.00pm</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-3 shadow">
                        <img src="https://themesfamily.com/tm/tawwab/assets/img/blog/3.jpg" class="img-fluid rounded-2"
                            alt="">
                        <h3>Sanjay</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestiae ad eos
                            repellat molestias atque quisquam nisi, placeat doloremque quas.
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h6>Years</h6>
                                <p>25-40</p>
                            </div>
                            <div class="col">
                                <h6>Size</h6>
                                <p>25-40</p>
                            </div>
                            <div class="col">
                                <h6>Class Time</h6>
                                <p>8.00Am-5.00pm</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-3 shadow">
                        <img src="https://themesfamily.com/tm/tawwab/assets/img/blog/3.jpg" class="img-fluid rounded"
                            alt="">
                        <h3>Sanjeev</h3>
                        <p>
                           I'm very grateful for this website. I purchased the original brand new G-Wagon for only 20,000 rupees. thank you so much.
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h6>Years</h6>
                                <p>25-40</p>
                            </div>
                            <div class="col">
                                <h6>Size</h6>
                                <p>25-40</p>
                            </div>
                            <div class="col">
                                <h6>Class Time</h6>
                                <p>8.00Am-5.00pm</p>
                            </div>

                        </div>
                    </div>




                </div>
            </div>

            <!-- our courses end  -->





            <!-- new update section end  -->



            <style>
                .about-section {
                    background: #f8f9fa;
                    padding: 60px 0;
                }

                .about-section h2 {
                    font-size: 36px;
                    margin-bottom: 30px;
                    font-weight: bold;
                    color: #343a40;
                }

                .about-section p {
                    font-size: 18px;
                    color: #6c757d;
                }

                .about-section .achievement {
                    font-size: 16px;
                    color: #343a40;
                    margin-top: 20px;
                }

                .container>p,
                h2,
                li {
                    color: whitesmoke;
                }
            </style>





            <div class="container about-section text-center rounded-3 shadow" id="aboutsection"
                style="height: 100vh;background-color: #6861bc;color: #f1f8ff;">
                <h2>About Us</h2>
                <p>Welcome to OurStore, your number one source for all things [product]. We're dedicated to giving
                    you the very
                    best of [product], with a focus on dependability, customer service, and uniqueness.</p>
                <p>Founded in [year] by [Founder Name], OurStore has come a long way from its beginnings in
                    [starting location].
                    When [Founder Name] first started out, [his/her/their] passion for [industry] drove them to quit
                    the day
                    job, do tons of research, etc., so that OurStore can offer you the world's most advanced
                    [product]. We now
                    serve customers all over [place], and are thrilled that we're able to turn our passion into our
                    own website.
                </p>
                <p class="achievement">Our Achievements:</p>
                <ul class="list-unstyled achievement">
                    <li>🏆 Awarded Best Online Store in 2021</li>
                    <li>🚀 Over 1 Million Satisfied Customers</li>
                    <li>🌟 Featured in Top E-commerce Magazines</li>
                </ul>
                <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any
                    questions or
                    comments, please don't hesitate to contact us.</p>
                <p>Sincerely </p>
            </div>









            <!-- code end  -->
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>