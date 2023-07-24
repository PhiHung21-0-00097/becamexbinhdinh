<?php
require_once('db.php');
$query = "select * from info_kh";
$result = mysqli_query($con,$query);

?>



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
    td{
        
        font-family: Arial, Helvetica, sans-serif;
    }

</style>
<body class="bg-dark">
    <div class="container bg-white">
<div class="row mt-5">
    <div class="card-header">
            <div class="row">
                <div class="col">
                <img class="img-fluid" src="https://becamexbinhdinh.com.vn/wp-content/uploads/2021/10/logo-becamex-binhdinh.png" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <h2 class="display-6 text center" style="font-family: Arial, Helvetica, sans-serif;color: #006CB7;"> Dữ liệu khách hàng</h2>
            </div>
    </div>
            <div class="row-container">
            <div class="row">
            <div class="card-body">
                <table class="table table-bordered"> 
                    <tr class="text-dark  " style="background-color:#006CB7" >
                        <td>ID</td>
                        <td>Tên khách hàng</td>
                        <td>Lời nhắn</td>
                        <td>Bình chọn   </td>

                    </tr>
                    <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){

                            
                 
                        ?>
                        <td> <?php echo $row['id']; ?></td>
                        <td> <?php echo $row['fullName']; ?></td>
                        <td> <?php echo $row['content']; ?></td>
                        <td> <?php echo $row['gender']; ?></td>

                        </tr>
                        <?php
                        }
                        ?>

                    </tr>
                </table>
            </div>
            </div>
            </div>
        </div>

        </div>

        <!-- <form action="">
    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="http://127.0.0.1:8000/admin/products/3/delete" method="POST">
                                    <input type="hidden" name="_token" value="CUgiqTgpOsxCataP1MhC4sZLGoOmgTxWVKVY1vMz">                                    <input type="hidden" name="_method" value="DELETE">                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                                            <tr>
                            <td>7</td>
                            <td>Logitech Pebble</td>
                            <td>
                                <a class="btn btn-primary" href="http://127.0.0.1:8000/admin/products/7/edit">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="http://127.0.0.1:8000/admin/products/7/delete" method="POST">
                                    <input type="hidden" name="_token" value="CUgiqTgpOsxCataP1MhC4sZLGoOmgTxWVKVY1vMz">                                    <input type="hidden" name="_method" value="DELETE">                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                                    </tbody>
            </table>
        </div>
    </div>
    </div></form> -->
</body>
</html>
