<?php
$err='Bạn cần nhập đầy đủ thông tin';
require 'connect.php';

if(isset($_POST['btn-submit'])){
    echo "<pre>";  
    $useranmee = $_POST['name'];
    $content = $_POST['content'];
    $gender = $_POST['gender'];
    if(!empty($useranmee)&&!empty($content)&&!empty($gender)){

        echo "<pre>";

        $sql = "INSERT INTO `info_kh` (`fullName` ,`content`,`gender` ) VALUES('$useranmee','$content','$gender')";

        echo "<pre>";  

        if($conn->query($sql)===TRUE){  
            echo"Đã gửi thành công";   
        }
        else{
            echo "Lỗi {$sql}".$conn->error;
        }
    }else{
        echo $err;
    }
}
?>