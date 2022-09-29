<?php 

session_start();
include('connection.php');
//passing  the variables
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
//password convert to md5 algorithms
$pass = md5($password);
if($role=='admin'){
//query user table to check if login data is correct
$login2 = mysqli_query($connect, "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$pass'");
if(mysqli_num_rows($login2)>0){
    //fetch admindata in array
    $admindata = mysqli_fetch_array($login2);
    
    $_SESSION['admindata'] = $admindata;
     
     echo '
     <script>
     window.location=("dashboard.php");
     
     </script>
     ';
     
    
    }else {
        echo '
     <script>
     alert("invalid admin login");
     window.location=("index.html");
     
     </script>
     ';
    }

}elseif($role=='user'){
    $login1 = mysqli_query($connect, "SELECT * FROM users WHERE user_email='$email' AND user_password='$pass'");

if(mysqli_num_rows($login1)>0){
//fetch userdata in array
$userdata = mysqli_fetch_array($login1);

$_SESSION['userdata'] = $userdata;
echo '
<script>
window.location=("dashboard.php");

</script>
';
}else{

    echo '
    <script>
    alert("invalid user login");
    window.location=("index.html");
    
    </script>
    ';
}
}else{
    echo 'invalid role';
}






?>