<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .tong {
            display: flex;
            margin: 0 169px;
        }

        .tong nav {
            width: 245px;

            margin-left: -32px;
            margin-top: 20px;
            margin-right: 30px;
        }

        .tong nav ul {
            list-style-type: none;
        }

        .tong nav ul li {
            border: 1px solid #ccc;
            height: 38px;
        }

        .vuilongchon {

            margin: 74px 19px;
            font-size: 23px;
        }

        td div {
            display: flex;
            gap: 20px;
            align-items: center;
            justify-content: center;
        }

        .formsuanguoidung span {
            font-weight: 600;
            font-size: 22px;
            color: #e91e63;
            margin: 0 274px;
        }

        .formsuanguoidung button {
            width: 166px;
            margin-left: 13px;
            margin-top: 10px;
        }

        a {
            text-decoration: none !important;
            color: #696363 !important;
        }

        a:hover {
            color: #696363 !important;
        }
    </style>
</head>

<body>
    <footer><?php include_once "Templates/Header.php"; ?></footer>

    <div class="tong">
        <nav>
            <ul>
                <a href="index.php?task=quanlynguoidung">
                    <li>Quản lý người dùng</li>
                </a>
                <a href="index.php?task=quanlydanhmucsp">
                    <li>Quản lý danh mục</li>
                </a>
                <a href="index.php?task=quanlysp">
                    <li>Quản lý sản phẩm</li>
                </a>
                <a href="index.php?task=quanlydonhang">
                    <li>Quản lý đơn hàng</li>
                </a>
            </ul>
        </nav>
        <div class="formsuanguoidung">
            <span>Thêm mới người dùng</span>
            <form action="" method="POST" class="row">
                <div class="form-group col-12">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group col-6">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group col-6">
                    <label for="">Nhập lại password</label>
                    <input type="password" class="form-control" name="repassword">
                </div>
                <div class="form-group col-6">
                    <label for="">Họ tên</label>
                    <input type="text" class="form-control" name="hoten">
                </div>
                <div class="form-group col-6">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" name="sdt">
                </div>
                <div class="form-group col-4">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" name="diachi">
                </div>
                <div class="form-group col-4">
                    <label for="gioitinh">Giới tính</label>
                    <select name="gioitinh" id="gioitinh" class="form-control">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
                    </select>
                </div>

                <div class="form-group col-4">
                    <label for="level">Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">Khách hàng</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit" name="adduser">Thêm người dùng</button>
            </form>
        </div>

        <!-- <div class="container">
        <div class="heading">Thêm mới người dùng</div>
        <form action="." class="form" method="post">
            <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
            <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
            <input required="" class="input" type="password" name="repassword" id="password" placeholder="Nhập lại password">
            <input required="" class="input" type="text" name="hoten" id="password" placeholder="Họ tên">
            <input required="" class="input" type="text" name="sdt" id="password" placeholder="Số điện thoại">
            <input required="" class="input" type="text" name="diachi" id="password" placeholder="Địa chỉ">
            <select name="gioitinh" id="" class="input" placeholder="Giới tính">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
            <select name="level" id="" class="input">
                <option value="1">Admin</option>
                <option value="2">Khách hàng</option>
            </select>
            <button class="login-button" type="submit" name="adduser">Thêm người dùng</button>
        </form> -->

    </div>

    </div>


    <footer><?php include_once "Templates/Footer.php"; ?></footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>