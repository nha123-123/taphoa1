<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .dangnhap {
            margin: auto;
            display: flex;
            flex-direction: column;
            border: 1px solid #ccc;
            width: 400px;
            border-radius: 11px;
        }

        .dangnhap span {
            font-weight: 500;
            font-size: 25px;
            text-align: center;
        }

        .dangnhap button {
            background-color: #9e663a;
            cursor: pointer;
        }

        .dangnhap button {
            font-weight: 500;
            color: white !important;
            font-size: 12px;
        }

        .dangnhap button {
            color: white !important;
            text-decoration: none;
            width: 86px;
            margin: auto;
        }

        .dangnhap .dikem {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <footer><?php include_once "Templates/Header.php"; ?></footer>

    <!-- <div class="container">
        <div class="heading">Sign In</div>
        <form action="." class="form" method="post">
            <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
            <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
            <input required="" class="input" type="password" name="repassword" id="password" placeholder="Nhập lại password">
            <input required="" class="input" type="text" name="hoten" id="password" placeholder="Họ tên">
            <input required="" class="input" type="text" name="sdt" id="password" placeholder="Số điện thoại">
            <input required="" class="input" type="text" name="diachi" id="password" placeholder="Địa chỉ">
            <!-- <input required="" class="input" type="text" name="gioitinh" id="password" placeholder="Giới tính"> -->
    <!-- <select name="gioitinh" id="" class="input" placeholder="Giới tính">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
            <button class="login-button" type="submit" name="register">Đăng ký</button>
            <span class="forgot-password">Nếu bạn đã có tài khoản thì <a href="#">Đăng nhập</a></span>
        </form> -->
    <!-- </div>  -->

    <form class="dangnhap row" method="post">
        <span>Đăng ký</span>
        <div class="form-group col-12">
            <label>Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" />
        </div>
        <div class="form-group col-12">
            <label>Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Password" />
        </div>
        <div class="form-group col-12">
            <label>Nhập lại Password</label>
            <input class="form-control" type="password" name="repassword" id="repassword" placeholder="Password" />
        </div>
        <div class="form-group col-12">
            <label>Họ tên</label>
            <input class="form-control" type="text" name="hoten" id="hoten" placeholder="Họ tên" />
        </div>
        <div class="form-group col-12">
            <label>Số điện thoại</label>
            <input class="form-control" type="text" name="sdt" id="sdt" placeholder="Số điện thoại" />
        </div>
        <div class="form-group col-12">
            <label>Địa chỉ</label>
            <input class="form-control" type="text" name="diachi" id="diachi" placeholder="Địa chỉ" />
        </div>
        <div class="form-group col-12">
            <label>Giới tính</label>
            <select name="gioitinh" id="" class="form-control" placeholder="Giới tính">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <button class="btn mb-3 mt-3" type="submit" name="register">
            Đăng ký
        </button>
        <span class="dikem">
            Nếu bạn đã có tài khoản? <a href="index.php?task=pagelogin">Đăng Nhập</a>
        </span>
    </form>
    <footer><?php include_once "Templates/Footer.php"; ?></footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>