

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- custom css  -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <navbar>
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
     <nav class="navbar navbar-expand-lg  row" style="background-color: #6861bc;position: sticky;">
            <div class="container-fluid px-md-5 py-md-2">
                <a class="navbar-brand col-md-3 text-center fw-bolder text-white fs-1 " style="font-family: italic;"
                    href="./index.php">Buy R sell</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                            <a class="nav-link  text-white " href="./index.php#happycustomer">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white " href="./index.php#aboutsection">About Us</a>
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
  </navbar>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class=" bg-primary p-5 Addproduct " style="height: 100vh;">
            <h1 class="text-center m-3 text-white" style="text-decoration: underline;">Product details !</h1>
            <div class="row offset-2 border-0">
                <!-- left column  -->
                <div class="col-4 ">
                    <div class="row">
                        <div class="col-12 my-4">
                            <div class="row">
                                <label for="img" class="col-10 offset-1 rounded-3 displayImg"
                                    style="border:3px dotted black;height:200px;postition:relative;display:flex;align-items:center;justify-content:center;">
                                       <div style="width:150px;height:150px;background-color:rgb(81, 90, 98,0.6)" class="rounded-circle d-flex align-items-center justify-content-center">
                                          <p style="font-size:140px;color:white">+</p>
                                       </div>

                                </label>
                                <input type="file" id="img" hidden name="img" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-9 d-flex flex-column  align-items-start justify-content-center mx-3 gap-2 p-4">
                            <style>
                                input::placeholder {
                                    color: white;

                                }

                                input:active {
                                    border: none;
                                }
                            </style>
                            <input type="text" placeholder="name" class="px-2 " name="name" required autocomplete="off"
                                style="background-color: #0d6efd;border-bottom: 3px solid whitesmoke;color:white;">
                            <input type="text" placeholder="prize" class="px-2" name="prize" required autocomplete="off"
                                style="background-color: #0d6efd;border-bottom: 3px solid whitesmoke;color:white;">
                        </div>
                    </div>
                </div>
                <!-- right column  -->
                <div class="col-4">
                    <textarea  id="" class="rounded p-5 m-3" placeholder="product description..." name="descp" required autocomplete="off"
                        style="height: 90%;width: 100%;"></textarea>
                </div>
            </div>
            <div class="row justify-content-center m-5 col-10 ">
                <input class="col-5 py-2 rounded-2 border-0 me-5"  type="submit" name='submit'   autocomplete="off">
            </div>

        </div>

    </form>

    <?php 
          
        include("dbconnection.php") ;
        if(isset($_POST['submit'])){
              $imgname=$_FILES['img']['name'];
              $temp=$_FILES['img']['tmp_name'];
              $path="./uploads/".$imgname;
              move_uploaded_file($temp,$path);
            
            $name=$_POST['name'];
            $prize=$_POST['prize'];
            $descp=$_POST['descp'];


            $qInsert="insert into products(img,name,prize,descri)
                      values('$imgname','$name',$prize,'$descp')
                    ";


            if(!mysqli_query($conn,$qInsert)){
                echo "failed to store !";
                die;
               
            }

            
            
        }
    ?>
    
</body>

</html>