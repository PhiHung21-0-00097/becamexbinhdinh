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
        border-color: white;
        
    }
    #img:hover{
    border-radius: 100px;
    }
    hr{
    color: #006CB7;
    }
    #td:hover{
        background-color: #F2F2F2;
    }

    tr, td {  
    padding: 10px;  
} 
</style>
<body class="bg-white">
    <form action=""style="">
        <div class="col"style="background-color: #006CB7;box-shadow: 1px  1px 10px #AAA;">
            <img style="width:350px;" class="img-fluid" src="img/becamexlogo.jpg" alt="">
        </div>
    </form>
    <div class=" mt-4 " style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col text-center ">
                    <h2 class="" style="font-family: Arial;color: #006CB7;">THAM DỰ HỘI TRẠI 2023</h2>
                    <strong><hr></strong>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-8"></div>
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

            <div class="row mt-3">
                    <form action="" method="post"> 
                        <div class="row">
                            <div class="col-8"></div>
                            <div class="col" style="display: flex;gap: 1%;">
                                <form action="#" method="post"> 
                                    <input style="width: 14rem;" type="text" style="float: right;" placeholder="Tìm kiếm theo tên NV" class="form-control " name="tukhoa">
                                    <input type="submit" name="timkiem" id="post-query-submit" class="btn " value="Lọc" fdprocessedid="gu3yk7d" style="border-color: #006CB7;color:#006CB7">
                                </form>
                            </div>
                            <div class="col">
                                <form action="php/export.php" method="post">
                                    <!-- <input type="submit" name="export" style="width: 100px;height: 35px;float: right;"  class="btn btn-success" ><i class="bi bi-download"> Export</i> </input> -->
                                    <button type="submit" name="export" style="width: 100px;height: 35px;float: right;"  class="btn btn-success" ><i class="bi bi-download"> Export</i> </button>

                                </form>
                                </div>
                        </div>
                    </form>
            </div>


            <div class="row mt-3">
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
                        <td id="td"> <?php echo $i++; ?></td>
                        <td id="td" style="color: #006CB7;"> <?php echo $row['fullName']; ?></td>
                        <td id="td"> <?php echo $row['content']; ?></td>
                        <td id="td"> 
                            <?php 
                                if($row['gender']=="tuchoi"){
                                echo 'Từ chối';
                                }else{
                                echo 'Tham gia';
                                } 
                            ?>
                        </td>
                        <td id="td">
                            <a href="php/xoa.php?id=<?php echo $row['id'];?>" ><img id="img"style="width: 20px;" src="img/Letter-X-Transparent-Image.png" class="img-fluid" alt=""></a>
                        </td>
                    </tr>  
                        <?php
                            }else{                                    
                        ?>
                    <tr style="background-color: white;text-align: center;">
                        <td id="td"> <?php echo $i++; ?></td>
                        <td id="td" style="color: #006CB7;"> <?php echo $row['fullName']; ?></td>
                        <td id="td"> <?php echo $row['content']; ?></td>
                        <td id="td"> 
                            <?php 
                                if($row['gender']=="tuchoi"){
                                echo 'Từ chối';
                                }else{
                                echo 'Tham gia';
                                } 
                            ?>
                        </td>
                        <td id="td"> 
                            <a  href="php/xoa.php?id=<?php echo $row['id'];?>" ><img  id="img" style="width: 20px;" src="img/Letter-X-Transparent-Image.png" class="img-fluid" alt=""></a>
                        </td>
                    </tr>                                              
                        <?php
                            }
                            }
                            }
                        ?>    
                </table>
            </div>
        </div>
        <footer class="mt-4" style="background-color: #006CB7;box-shadow: 1px  1px 10px #AAA;">

                        <div class="row">
                            <div class="col ms"style="background-color:;box-shadow: 1px  1px 10px #AAA;">


                            </div>
                        </div>
        </footer>
    </div>
</body>
</html>
