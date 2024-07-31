<?php
   include("dbconnection.php");
   if(isset($_GET['remove'])){
      $id=$_GET['remove'];   
      $qdelete="DELETE FROM `cart2` WHERE cartid=".$id;
      if(!mysqli_query($conn,$qdelete)){
        echo "unsuccessful removed !";
      }else{
            header("location:./mycartpage.php");
      }
      
   }
?>