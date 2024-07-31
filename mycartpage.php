<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
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
  <!-- nav bar start  -->
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
  <!-- nav bar end  -->

    <div class="row">
      
      <div class="col-md-7 shadow mt-5 ms-3" style="overflow: auto;height: 80vh !important;">
        <div class="row" style="height: 200px !important;">

          <?php 
               include("dbconnection.php");
               $qty=1;             
                $qdisplay="select * from cart2";
                $exe=mysqli_query($conn,$qdisplay);
                $rows=mysqli_num_rows($exe);
                 $totalcost=0;
                if($rows>0){
                    while($row=mysqli_fetch_assoc($exe)){
                    $totalcost+=$row['prize'];
                ?>

          


          <div class="col-md-4 shadow " style="background-color: white;scale: .7;">
            <div>
              <!-- img  -->
              <!-- <img src="./images/products/p1.jpg" class="rounded-2 w-100 my-3" alt=""> -->
              <img src="./uploads/<?php echo $row['img'] ?>" class="rounded-2 w-100 my-3" alt="">
            </div>
            <h3 class="m-3"><?php echo $row['name']?></h3>

            <div class="row col-9 px-3">
              <h5>Rs.<span><?php echo $row['prize']?></span> </h5>
            </div>
            <hr>
            <ul class="row list-unstyled ">
              

              <li class="col">
             <a href="./removeproduct.php?remove=<?php echo $row['cartid']?>" style="text-decoration:none">  
                <button
                  class="btn btn-danger w-100 py-2 h-100 d-flex align-items-center justify-content-center"  >Cancel</button>

           </a>

                </li>
            </ul>
          </div>

          <?php 
        } }
          ?>

        </div>
      </div>

      <style>

      </style>

      <div class="col p-5">
        <h3 style="text-align: center; text-decoration: underline; padding-bottom: 30px;">Cart Details !</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SL.No</th>
              <th scope="col">Product</th>
              <th scope="col">Total prize</th>
            </tr>
          </thead>

          <tbody>
<?php 

                $qdisplay1="select * from cart2";
                $exe1=mysqli_query($conn,$qdisplay);
                $rows1=mysqli_num_rows($exe1);
                 $count=1;
                if($rows1>0){
                    while($row1=mysqli_fetch_assoc($exe1)){
                ?>

          

          
            <tr>
              <th scope="row"><?php echo $count?></th>
              <td><?php echo $row1['name']?></td>
              
              <td><?php echo $row1['prize']?></td>
            </tr>
<?php 

      $count+=1; 
    }}
?>            

          </tbody>
        </table>

<div class="d-flex flex-column gap-3 align-items center justify-content-center">
  <h3>Total Cost :<?php echo $totalcost?> </h3>
  <br>
  <a href="addressform.php" class="offset-4 col-6">

    <button class="btn btn-primary" > place Order !</button>
  </a>

</div>
      </div>
    </div>
  </div>
  </div>
  <script>
    
   

    function placed(){
      alert("Your Products will be delivered sooon !..Thank You  :)");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>