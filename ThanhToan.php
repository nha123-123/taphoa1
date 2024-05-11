<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form {
            margin: 0 556px;
        }
    </style>
</head>

<body>
    <footer><?php include_once "Templates/Header.php"; ?></footer>


    <form method="POST">
        <table>
            <tr class="form-group">
                <td>Họ tên</td>
                <td><input class="form-control" type="text" value="<?php echo $_SESSION['hoten']; ?>"></td>
            </tr>
            <tr class="form-group">
                <td>Địa chỉ email</td>
                <td><input class="form-control" type="text" value="<?php echo $_SESSION['email']; ?>"></td>
            </tr>
            <tr class="form-group">
                <td>Số điện thoại</td>
                <td><input class="form-control" type="text" value="<?php echo $_SESSION['sdt']; ?>"></td>
            </tr>
            <tr class="form-group">
                <td>Địa chỉ</td>
                <td><input class="form-control" type="text" value="<?php echo $_SESSION['diachi']; ?>"></td>
            </tr>
            <tr class="form-group">
                <td>Tổng tiền</td>
                <td><input class="form-control" type="text" value="<?php echo number_format($_SESSION['total'], 0, '.', '.') . " VNĐ"; ?>"></td>
            </tr>
            <tr class="form-group">
                <td>Phương thức thanh toán</td>
                <td>
                    <input type="radio" name="payment_method" value="Ship COD" checked>Giao hàng tại nhà(COD) <br>
                    <input type="radio" name="payment_method" value="Thanh toán qua thẻ ngân hàng">Thanh toán qua thẻ ngân hàng
                </td>
            </tr>

        </table>
        <div><input class="btn btn-danger" type="submit" name="thanhtoan" value="Giao hàng"></div>
    </form>

    <footer><?php include_once "Templates/Footer.php"; ?></footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>