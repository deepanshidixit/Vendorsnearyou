<?php

$data = $_POST;

if (empty($data['fname']) ||
    empty($data['lname']) ||
    empty($data['phoneno']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) 
    {
   $msg= "Please fill all required fields!";
   phpAlert($msg);
   
}

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';        
}

if ($data['password'] !== $data['password_confirm']) {
   $msg1 = "Password and Confirm password should match!";   
   phpAlert($msg1);
}