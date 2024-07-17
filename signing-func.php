<?php
session_start();
include_once 'Users.php';
include_once 'index.php';
$user = new Users();
if ($user->session())
{
    header("location:./index.php");
}

$user = new Users();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $user->login($_REQUEST['email'],$_REQUEST['password']);
    if($user){
        $_SESSION['login'] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $_POST['email'];
    }
    else
    {
        ?>
 <div class="alert alert-danger" role="alert">
    <?php
     echo "Login Failed!";
     ?>
 </div>
<?php
    }
}