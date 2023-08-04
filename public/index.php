


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
                            <div class="row mt-5">
                                <h1 class="text-center text-uppercase mt-2" style="color: #ed4c34;font-family: Arial;font-size: 40px;">PHIẾU KHẢO SÁT</h1> 
                                <h4 class="text-center text-uppercase mt-2" style="color: #03B9DF;font-family: Arial;">THAM DỰ HỘI TRẠI 2023</h4> 
                            </div>
                            <div class="row">
                                <div class="form-group mt-3">
                                    <input style="font-family: Arial" name="name" value="" type="text" class="form-control" placeholder="Họ và tên">
                                </div>
                            
                                <div class="form-group mt-3">
                                    <textarea style="font-family: Arial" class="form-control" name="content" rows="3" maxlength="150" placeholder="Lời nhắn"></textarea>
                                </div>

                                <div class="text-center form-group mt-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="gender" id="thamgia" value="thamgia" checked style="color: #006CB7;">
                                        <label for="thamgia" class="form-check-label" style="color: #006CB7;font-family: Arial">Tham dự</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="gender" id="tuchoi" value="tuchoi">
                                        <label for="tuchoi" class="form-check-label" style="color: #006CB7;font-family: Arial;">Không Tham dự</label>
                                    
                                    </div>
                                </div >               
                                <div class="row form-group">
                                    <div class="col-12 text-center">
                                        <button type="submit" name="btn-submit" class="btn  btn-dark btn-block mt-4 mb-4" style="background-color: #006CB7;color: white;font-family: Arial;width: 200px;">Gửi thông tin</button>
                                    </div>
                                
                                    <?php 

                                        require 'php/db.php';
                                        if(isset($_POST['btn-submit'])){
                                        $useranmee = $_POST['name'];
                                        $content = $_POST['content'];
                                        $gender = $_POST['gender'];
                                        if(!empty($useranmee)&&!empty($gender)){
                                            $sql = "INSERT INTO `info_kh` (`fullName` ,`content`,`gender` ) VALUES('$useranmee','$content','$gender')";
                                    ?> 

                                    <?php
                                        
                                        if($con->query($sql)===TRUE){ 
                                    ?>

                                    <div class="row form-group" style="width: 210px;">
                                        <label style="color: green;background-color: #84EE8B;" for=""> <?php echo"Đã gửi thành công"; ?>
                                        <img src="img/unnamed-removebg-preview.png" alt="" style="width: 20px;"></label> 
                                    </div>

                                    <?php
                                        }
                                        }else
                                        {
                                    ?>
                                        <div class="row form-group " style="width: 290px;">
                                            <label style="color: ff0000;background-color: #EE5F5F;" for=""> <?php echo"Bạn cần nhập đầy đủ thông tin"?>
                                            <img src="img/Letter-X-Transparent-Image.png" alt="" style="width: 20px;"></label> 
                                        </div>
                                    <?php
                                        }
                                        } 
                                    ?>
                                </div>
                            </div>
                        </form>    
                    </div>
                <img src="img/bcm.png" alt="" class="mb-1 " style="width: 1000xp;">
                </div>    
            </div>
        </div>      
    </div>
</body>
</html>