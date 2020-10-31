<?php
if(isset($_POST['email'])){
    $conn=$con->koneksi();
    $email=$_POST['email'];$psw=md5($_POST['password']);
    $sql = "SELECT * FROM data_login where password ='$psw' and email ='$email' and active='Y'";
    $user = $conn->query($sql);
    if($user->num_rows > 0){
        $sess=$user->fetch_array();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id']=$sess['id'];
        $url="http://localhost/php";
        header('Location: http://localhost/php/admin/index.php?mod=tamu');
    }else{
        $msg="Email dan Password tidak cocok";
        include_once 'views/v_login.php';
        }
}else{
        include_once 'views/v_login.php';
}
?>
