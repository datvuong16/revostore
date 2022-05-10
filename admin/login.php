<?php
session_start();
require_once("../vendor/autoload.php");

use App\Models\User;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <?php
    if (isset($_POST['DANGNHAP'])) {
        $user = new User();
        $str_error = '';
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $str_error = $username . $password;
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $data['email'] = $username;
        } else {
            $data['username'] = $username;
        }
        $data['status'] = 1;
        $row = $user->user_row($data);
        if ($row != null) {
            if ($password == $row['password']) {
                $_SESSION['useradmin'] = $username;
                $_SESSION['userid'] = $row['id'];
                $_SESSION['fullname'] = $row['fullname'];
                header("location: index.php");
            } else {
                $str_error = 'Mật khẩu không chính xác';
            }
        } else {
            $str_error = 'Tài khoản này không tồn tại';
        }
    }
    ?>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Đăng nhập</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Thông tin đăng nhập</p>

                <form action="" name="frm1" method="post">
                    <div class="input-group mb-3">
                        <input name="username" type="text" required class="form-control" placeholder="Tên đăng nhập hoặc email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button name="DANGNHAP" type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <?php echo isset($str_error) ? $str_error : ''; ?>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>