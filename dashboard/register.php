<?php 
include ('connection.php');

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];



$check = mysqli_query($connect,"SELECT * FROM users where user_email='$email'");

if($check->num_rows>0){
echo '
<script>

alert("Email already exist");
window.location=("signup.html");
</script>
';


}else{
if($password==$cpassword){

$user_id = "user" .rand(0000,99999)."";
$pass = md5($password);
$avatar="avatar.jpg";
$insert = mysqli_query($connect, "INSERT INTO users(user_id,user_password,user_email,user_phone,user_fulname,user_address,user_photo,user_status) VALUES('$user_id','$pass', '$email', '$phone', '$fullname', '$address','$avatar','1') ");    
echo '
<script>
    alert("Registration Successfully");
    window.location =("index.html");
    </script>
';
}else{
    echo '
    <script>
 alert("Password and Confirm Password does not match");
  window.location =("signup.html");
  </script>
  
  ';
}

}







?>