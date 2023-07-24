


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="http://127.0.0.1:8000/css/admin.css" rel="stylesheet">
    <title>Becamex Bình Định</title>

</head>
<style>
     html, body{
      width: 100%;
      height: 100%;
    }
    .row-container{
      border: 2px solid aliceblue;
      border-radius: 20px; 
      margin-top: 20vh; 
      box-shadow: 14px 30px 51px 8px rgba(0,0,0,0.75);
    }
    img{
       width: 300px;
    }
</style>
<body class="bg-secondary">
    <div class="container">
        <div class="row-container bg-white" >
            <div class="container">
                <div class="row align-items-center mb-2" >
                    <div class="col-6 text-center">
                        <img class="img-fluid" src="https://becamexbinhdinh.com.vn/wp-content/uploads/2021/10/logo-becamex-binhdinh.png" alt="">
                    </div>

                    <div class="col-6">
                        <form action="" method="post" role="form">
                            <h1 class="text-center text-uppercase mt-2" style="color: #ed4c34;font-family: Arial, Helvetica, sans-serif;font-size: 40px;">PHIẾU KHẢO SÁT</h1> 
                            <h4 class="text-center text-uppercase mt-2" style="color: #03B9DF;font-family: Arial, Helvetica, sans-serif;">THAM DỰ HỘI TRẠI 2023</h4> 
                            <div class="row">
                            <div class="form-group mt-5">
                                <input style="font-family: Arial, Helvetica, sans-serif" name="name" value="" type="text" class="form-control" placeholder="Họ và tên">
                            </div>
                            
                            <div class="form-group mt-3">
                                <textarea style="font-family: Arial, Helvetica, sans-serif" class="form-control" name="content" rows="3" maxlength="150" placeholder="Lời nhắn"></textarea>
                            </div>

                            <div class="form-group mt-3">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" id="thamgia" value="thamgia" checked style="color: black;">
                                    <label for="thamgia" class="form-check-label" style="color: #006CB7;font-family: Arial, Helvetica, sans-serif">Tham dự</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" id="tuchoi" value="tuchoi">
                                    <label for="tuchoi" class="form-check-label" style="color: #006CB7;font-family: Arial, Helvetica, sans-serif;">Không Tham dự</label>
                                
                                </div>
                            </div>
                        
                            <div>
                                <button type="submit" name="btn-submit" class="btn btn-dark btn-block mt-4 mb-4" style="background-color: #006CB7;color: white;font-family: Arial, Helvetica, sans-serif;">Gửi thông tin</button>       
                            </div>
                            <div class="row">
                            <label style="color: red;" for=""> 
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
                                ?> 

                                <?php
                                if($conn->query($sql)===TRUE){ 
                                ?> 

                                <label style="color: green" for=""> <?php echo"Đã gửi thành công"; ?></label> 
                                <?php
                                }
                                else{
                                    echo "Lỗi {$sql}".$conn->error;
                                }
                                }else{
                                echo $err;
                                }
                                } ?>
                                </label>
                            
                                </div>
                            </div>
                        </form>    
                    </div>
                    <img src="bcm.png" alt="" class="mb-2" style="width: 1000xp;">
                </div>    
            </div>
        </div>      
    </div>
</body>
</html>