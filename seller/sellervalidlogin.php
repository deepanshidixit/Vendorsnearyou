<?php
    session_start();
      $con=mysqli_connect("localhost","root","","vendorsnearyou");

      $un=$_POST["username"];
    
      $pp=$_POST["password"];

      $r=mysqli_query($con,"select * from seller");
      while($row=mysqli_fetch_array($r))
      {
        if($row[3]==$un or $row[4]==$un)
        {
            if($row[13]==$pp)
            { 
                $_SESSION["log"]="yes";
                header("location:sellerhome.php");
            }
            else{
              header("location:sellerlogin.php");

            }
        }
        else
        {
          header("location:sellerlogin.php");
        }
      }

?>