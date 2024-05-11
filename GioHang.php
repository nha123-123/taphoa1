<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        form {
            margin: 0 169px;
        }

        .submit {
            margin-left: 1075px;
        }

        .tongtien {
            font-weight: 500;
            margin-left: 982px;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
    <footer><?php include_once "Templates/Header.php"; ?></footer>

    <form action="" method="POST">
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
            <?php
            if (isset($_SESSION['cart'])) {
                $total = 0;
                for ($i = 0; $i < count($_SESSION['cart']); $i++) { ?>
                    <tr>
                        <?php foreach ($data[$i]['product_info'] as $item) { ?>
                            <td>
                                <?php echo $i + 1; ?>
                            </td>
                            <td>
                                <img width="50px" height="50px" src="<?php echo $data[$i]['product_info'][0]['image']; ?>" alt="">
                            </td>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>

                            <td>
                                <?php echo $data[$i]['quantity']; ?>
                            </td>
                            <td>
                                <?php
                                $_SESSION['sub_total'] = $item['price'] * $data[$i]['quantity'];
                                echo number_format($_SESSION['sub_total'], 0, '.', '.');
                                ?>
                            </td>
                            <td>
                                <a class="text-danger" href="?task=del_cart&id=<?php echo $item['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        <?php } ?>
                    </tr>
            <?php
                    // error_reporting(0);
                    $total += $item['price'] * $data[$i]['quantity'];
                    $_SESSION['total'] = $total;
                }
            } else {
                echo ' <tr>
                <td>Không có hoa trong giỏ hàng</td>
                </tr>';
            }
            ?>


        </table>
        <div class="font-weight-bold tongtien">
            <?php
            echo "Tổng tiền: " . number_format($total, 0, '.', '.') . " VNĐ";
            ?>
        </div>
        <div><input class="btn btn-danger submit" type="submit" name="payment" value="Thanh toán"></div>
    </form>


    <footer><?php include_once "Templates/Footer.php"; ?></footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>