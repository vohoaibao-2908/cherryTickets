<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="view/css/login.css" />
  </head>
  <body>
    <div class="login">
      <div class="login__container">
        <h1>Đăng nhập ngay</h1>
        <form action="../php/login.php" method="post">
          <p>Địa chỉ email *</p>
          <input type="email" name="email" id="" />
          <p>Mật khẩu *</p>
          <input type="password" name="email" id="" />
          <a href="#"><h6>Quên / Đặt lại mật khẩu của bạn</h6></a>
          <input type="submit" value="Đăng nhập" id="dangnhap" name="dangnhap" />
        </form>
      </div>
    </div>
  </body>
</html>
