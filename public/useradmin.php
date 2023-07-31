<?php
require_once('php/db.php');
$query = "SELECT * from info_kh";
$result = mysqli_query($con,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Becamex Bình Định</title>

</head>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
    tr{
        border-color: black;
        
    }
</style>
<body class="bg-dark">
    <div class="container bg-white">
        <div class="row mt-5">
            <div class="card-header">
                    <div class="row mt-3">
                        <div class="col-12 mt-4 ms-3">
                            <img style="width:250px;" class="img-fluid" src="https://becamexbinhdinh.com.vn/wp-content/uploads/2021/10/logo-becamex-binhdinh.png" alt="">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-7"></div>
                            <div class="col">
                            <table class="table table-bordered" id="my-tablee"> 
                                <tr class="text-white  " style="background-color:#006CB7;font-weight: bold;" >
                                    <td>NV</td>
                                    <td>NV tham gia</td>
                                    <td>NV từ chối</td>
                                </tr>
                                <tr class="" style="">
                                    <?php
                                        $tongid = "SELECT *FROM info_kh";
                                        $id = mysqli_query($con,$tongid);
                                        if($idrun = mysqli_num_rows($id)){
                                            echo '<td>'.$idrun. '</td>';
                                        }
                                    ?>

                                    <?php
                                        $tongtg = "SELECT gender FROM info_kh where gender='thamgia'"  ;
                                        $tg = mysqli_query($con,$tongtg);
                                        if($tgrun = mysqli_num_rows($tg)){
                                            echo '<td>'.$tgrun. '</td>';
                                        }
                                    ?>

                                    <?php
                                        $tongktg = "SELECT gender FROM info_kh where gender='tuchoi'"  ;
                                        $ktg = mysqli_query($con,$tongktg);
                                        if($ktgrun = mysqli_num_rows($ktg)){
                                            echo '<td>'.$ktgrun. '</td>';
                                        }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                    

                    <div class="row  justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <h2 class=" " style="font-family: Arial, Helvetica, sans-serif;color: #ed4c34;">THAM DỰ HỘI TRẠI 2023</h2>
                                </div>
                                <div class="col-6">
                                    <form action="#" method="post">
                                    <input type="text" placeholder="Tìm kiếm" class="form-control" name="noidung">
                                    <button name="timkiem" style="">Tìm kiếm</button>
                                    </form>
                             
                                </div>
                                <div class="col-2">
                                        <a style="width: 100px;height: 35px;float: right;" href="export.php" class="btn btn-success " ><i class="bi bi-download"> Export</i> </a>
                                </div>
                            </div>

                            
                            <div class="row mt-2">
                                <table class="table table-bordered" id="my-table"> 
                                    <tr class="text-white" style="background-color:#006CB7;font-weight: bold;" >
                                        <td>ID</td>
                                        <td>Tên NV</td>
                                        <td>Lời nhắn</td>
                                        <td>Bình chọn</td>
                                        <td></td>
                                    </tr>
                                    <?php 
                                       $i= 1;
                                        while($row = mysqli_fetch_assoc($result)){       
                                            if($i%2==0){
                                               ?>
                                                 <tr style="background-color: #D2D0D2;">
                                        <td> <?php echo $i++; ?></td>
                                        <td> <?php echo $row['fullName']; ?></td>
                                        <td> <?php echo $row['content']; ?></td>
                                        <td> <?php echo $row['gender']; ?></td>
                                        <td><a href="xoa.php?id=<?php echo $row['id'];?>" class="btn btn-danger" style="text-align:center">Xóa</a></td>
                                    </tr>  
                                    <?php
                                        }else{                                    
                                    ?>
                                    <tr style="background-color: white;">
                                        <td> <?php echo $i++; ?></td>
                                        <td> <?php echo $row['fullName']; ?></td>
                                        <td> <?php echo $row['content']; ?></td>
                                        <td> <?php echo $row['gender']; ?></td>
                                        <td><a  href="xoa.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Xóa</a></td>
                                    </tr>                                              
                                    <?php
                                        }
                                    }
                                    ?>    
                                </table>
                            </div>       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
