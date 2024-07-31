<?php
   include("dbconnection.php");
   if(isset($_GET['removefromproducts'])){
      $id=$_GET['removefromproducts'];   
      echo $id;
      $qdelete="DELETE FROM `products` WHERE id=".$id;
      if(!mysqli_query($conn,$qdelete)){
        echo "unsuccessful removed !";
      }else{
            header("location:./products.php");
      }
      
   }
?>