<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  
</head>

<body>
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


  <div class="container-fluid">
    <div class="row gap-5" style="scale: .8;">

      
<?php  


   include("dbconnection.php");

   $qdisplay="select * from products";
   $exe=mysqli_query($conn,$qdisplay);
   $rows=mysqli_num_rows($exe);

   if($rows>0){
      while($row=mysqli_fetch_assoc($exe)){
   ?>

<div class="col-2  rounded-3 shadow  item " id="<?php echo $row['id'] ?>">
       <div class="col-12 text-end" >
    
      <img src="./uploads/<?php echo $row['img']?>"  class=" img-fluid py-2 rounded-5" style="border-radius:10px !important;width:260px;height:150px;object-fit:content" alt="product img">
       <a href="editproduct.php?edit=<?php echo $row['id'];?>" style="color:green;text-decoration:none";> edit</a>
       <a href="removefromproducts.php?removefromproducts=<?php echo $row['id'];?>"  style="color:red;text-decoration:none";> remove</a>
      </div>
        <div class="row">
          <div class="col-12">
            <style>
    .item {
      transition: all ease-out .2s;
    }

    .item:hover {
      scale: 1.2;
    }

    
  </style>
            <div class="row">
              <div class="fs-5 py-2 px-4 col-12"><?php echo $row['name'] ?></div>
              <div class="fs-6 py-3 px-4 col-12"><?php echo $row['prize'] ?></div>
              <div class="col-12 overflow-auto  px-4 py-2" >
                <?php echo $row['descri'] ?>
              </div>
                <div class="fs-4 py-2 col-12 text-center rounded-bottom-3" style="postition:relative;bottom:0px;background-color: #4191c0;color:white">
              <a href='./products.php?cartid=<?php echo $row['id']?>' style="text-decoration:none;color:white;">     Add to cart  </a>
                </div>
            </div>
          </div>
        </div>
      </div>
<?php 
}}




           if(isset($_GET['cartid'])){

            $cartid=$_GET['cartid'];
           
            $searchQ="
              select * from products where id=$cartid
            ";
            $exe1=mysqli_query($conn,$searchQ);
            $rows1=mysqli_num_rows($exe1);

            if($rows1>0){
                    $cartname="";
                    $cartprize="";
                    $cartdescri="";
                    $cartimg="";

                while($cart=mysqli_fetch_assoc($exe1)){
                    $cartname=$cart['name'];
                    $cartprize=$cart['prize'];
                    $cartdescri=$cart['descri'];
                    $cartimg=$cart['img'];
                }
                // echo $cartname;
               $insertintocart2="insert into cart2(name,img,prize,descri)
               values('$cartname','$cartimg',$cartprize,'$cartdescri')
               ";    

              !mysqli_query($conn,$insertintocart2);
                

           }
          }






?>

     



    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    function displayDescp() {
      var tag = document.querySelector(".descp");
      tag.classList.toggle("displayDesc");
    }
  </script>
</body>

</html>