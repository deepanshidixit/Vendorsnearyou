<form action='loginform.php' method='POST'>
    <?php
      $con=mysqli_connect("localhost","root","","");

      $mednm=$_POST["m1"];
      $medcom=$_POST["m2"];
      $medprice=$_POST["m3"];
      $meddesc=$_POST["m4"];
      $meddesc=$_POST["my"];

      $r=mysqli_query($con,"insert into medicines(MedName,Composition,Price,Description) values('$mednm','$medcom','$medprice','$meddesc') ");
      if($r)
      header("location:addmed.php");


    ?>

</form>