<!doctype html>
<html lang="en">
<?php 
include('dbconnection.php')
?>
 <?php 
      if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $zipcode=$_POST['zipcode'];
        
        $QinsertintoOrders="insert into orderdetails(name,phone,address,city,zipcode)
                        values('$name',$phone,'$address','$city',$zipcode)
                        ";
    
        if(!mysqli_query($conn,$QinsertintoOrders)){
            echo 'not inserted';
        }
        
        // header('location:index.php');
        echo"
            <script>
            alert('thankyou ! your order will be placed soon ! :) ');
            window.location.replace('./products.php');
            </script>
            ";
           
            
        
        
            

     }
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-image: url('./placeorderbannerimg1.avif');background-repeat: no-repeat;color:aliceblue;"
    style="height: 100vh !important;">
    <form method="POST" class="row g-3 col-6 offset-3 my-4  p-5 rounded-5 shadow " style="background-color: rgba(82, 79, 237, 0.34);">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" name='name' class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Phone number </label>
            <input type="number" name="phone" class="form-control" id="">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name='address' class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" name='city' class="form-control" id="inputCity">
        </div>
       
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip Code</label>
            <input type="text" name='zipcode' class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Confirm order!
                </label>
            </div>
        </div>
        <div class="col-12 ">
            <button type="submit" name='submit' class="btn btn-primary rounded-pill col-5 offset-3">Place Order</button>
        </div>
    </form>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>