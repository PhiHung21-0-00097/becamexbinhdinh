<?php
if((isset($_POST['btn_login']))&&($_POST['btn_login'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
header('location:useradmin.php');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ĐĂNG NHẬP</title>
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="plugins/bootstrap-icon/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <style>
    html, body{
      width: 100%;
      height: 100%;
      font-family: 'Raleway';
    }
    .row-container{
      border: 2px solid aliceblue;
      border-radius: 20px; 
      margin-top: 20vh; 
      padding: 30px;
      -webkit-box-shadow: 14px 30px 51px 8px rgba(0,0,0,0.75);
      -moz-box-shadow: 14px 30px 51px 8px rgba(0,0,0,0.75);
      box-shadow: 14px 30px 51px 8px rgba(0,0,0,0.75);
    }
    label, .form-check-lable, h1{
      color: black;

    }
  label{
    font-family: Arial, Helvetica, sans-serif
  }
  image{
    text-align:center;
  }
  </style>
  
  <body class="bg-secondary">
    <form action="useradmin.php" style="background-image: url(images/12345.jpg); width: 100%; height: 100%; ">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-3 row-container bg-white">
            <div class="row">
              <div div class="text-center">
                <img style="width: 250px;" class="center" src="https://becamexbinhdinh.com.vn/wp-content/uploads/2021/10/logo-becamex-binhdinh.png" alt="Becamex Bình Định" class="img-fluid">
              </div>
            </div> 
            <div class="row mt-3">
              <div class="form-group mt-3">
                <label for="email">Tên người dùng hoặc Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email" name="user"
                  placeholder=""/>
              </div>
              <div class="form-group mt-2">
                <label for="password">Mật khẩu</label>
                <input
                  type="password"
                  class="form-control"
                  id="password" name="pass"
                  placeholder=""/>
              </div>
              <div class="container">
              <div class="form-check my-2">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Tự động đăng nhập</label>
            </div>
            </div>
          </div>
            <div class="container">
              <div class="row">
                <div class="col-12 g-md-2">
                  <button type="submit" name="btn_login" class="btn btn-success my-2" style="width: 100%;font-family: Arial, Helvetica, sans-serif;background-color: #006CB7;color:aliceblue">ĐĂNG NHẬP</button>
                </div>
              </div>
            </div>
            
    </form>
  </body>
</html>