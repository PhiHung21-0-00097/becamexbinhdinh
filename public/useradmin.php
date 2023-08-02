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
        font-family: Arial;
    }
    tr{
        border-color: black;
        
    }
   #img:hover{
    border-radius: 100px;
   }

</style>
<body class="bg-dark">
    
    <div class="container bg-white">
    <header class="" style="background-color: #006CB7;">
        
    </header>
        <div class="row mt-5">
            <div class="card-header">
                    <div class="row mt-3 ">
                        <div class="col ms"style="background-color: #006CB7;">
                            <img style="width:350px;" class="img-fluid" src="img/logo-becamex.jpg" alt="">
                        </div>
                    </div>
                    
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
                

                
                                      
                    <div class="row justify-content-center">
                        <div class="col-7">
                            <h2 class=" " style="font-family: Arial;color: #ed4c34;">THAM DỰ HỘI TRẠI 2023</h2>
                        </div>
                        <div class="col-4">
                            <form action="#" method="post"> 
                                <div class="row">
                                    <div class="col-7 ">
                                        <input style="width: 230px;" type="text" placeholder="Tìm kiếm theo tên NV" class="form-control " name="tukhoa">
                                    </div>
                                    
                                    <div class="col">
                                        <button name="timkiem" type="submit" style="border-color: black;" class="btn btn-form ">Lọc</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-1">
                            <a style="width: 100px;height: 35px;float: right;" href="php/export.php" class="btn btn-success " ><i class="bi bi-download"> Export</i> </a>
                        </div>
                    </div>
                                
                    
                    <div class="row mt-2">
                        <table class="table table-bordered" id="my-table"> 
                            <tr class="text-white" style="background-color:#006CB7;font-weight: bold;text-align: center;" >
                                <td>ID</td>
                                <td>Tên NV</td>
                                <td>Lời nhắn</td>
                                <td>Bình chọn</td>
                                <td class="tacvu">Tác vụ</td>
                            </tr>
                                                            <?php 
                                                                include 'php/db.php';
                                                                if(isset($_POST['timkiem'])){
                                                                $noidung = $_POST['tukhoa'];
                                                                $sql = "SELECT * FROM info_kh WHERE fullName LIKE N'%".$noidung."%' ";
                                                                $sqp_pro = mysqli_query($con,$sql);
                                                                $i= 1;
                                                                while($row = mysqli_fetch_assoc($sqp_pro)){       
                                                                if($i%2==0){
                                                            ?>
                            <tr style="background-color: #E3E2E3;text-align: center;">
                                <td> <?php echo $i++; ?></td>
                                <td> <?php echo $row['fullName']; ?></td>
                                <td> <?php echo $row['content']; ?></td>
                                <td> 
                                                                <?php 
                                                                    if($row['gender']=="tuchoi"){
                                                                    echo 'Từ chối';
                                                                    }else{
                                                                    echo 'Tham gia';
                                                                } ?>
                                </td>
                                <td> <a href="php/xoa.php?id=<?php echo $row['id'];?>" ><img id="img"style="width: 20px;" src="img/Letter-X-Transparent-Image.png" class="img-fluid" alt=""></a></td>
                            </tr>  
                                                            <?php
                                                                }else{                                    
                                                            ?>
                            <tr style="background-color: white;text-align: center;">
                                <td> <?php echo $i++; ?></td>
                                <td> <?php echo $row['fullName']; ?></td>
                                <td> <?php echo $row['content']; ?></td>
                                <td> 
                                                                    <?php 
                                                                        if($row['gender']=="tuchoi"){
                                                                        echo 'Từ chối';
                                                                        }else{
                                                                        echo 'Tham gia';
                                                                    } ?>
                                </td>
                                <td> <a  href="php/xoa.php?id=<?php echo $row['id'];?>" ><img  id="img" style="width: 20px;" src="img/Letter-X-Transparent-Image.png" class="img-fluid" alt=""></a></td>
                            </tr>                                              
                                                            <?php
                                                                }
                                                                }
                                                                }
                                                            ?>    
                        </table>
                    </div> 
                
            </div>
        </div>
    </div>
</body>
</html>
