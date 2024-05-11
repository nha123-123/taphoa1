<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <form class="dangnhap row" method="post">
        <span>Đăng nhập</span>
        <div class="form-group col-12">
            <label>Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" />
        </div>
        <div class="form-group col-12">
            <label>Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Password" />
        </div>
        <button class="btn mb-3" type="submit" name="login">
            Đăng nhập
        </button>
        <span class="dikem">
            Nếu bạn chưa có tài khoản? <a href="index.php?task=pageregister">Đăng Ký</a>
        </span>
    </form>

    <footer><?php include_once "Templates/Footer.php"; ?></footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>