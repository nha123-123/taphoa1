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

        button {
            margin-left: 370px;
        }

        .abc {
            color: white !important;
        }

        a {
            text-decoration: none !important;
            color: #696363 !important;
        }

        .abc:hover {
            color: white !important;
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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Độ nổi bật</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['tendanhmuc'] ?></td>
                            <td><?php echo $row['donoibat'] ?></td>
                            <td>
                                <div>
                                    <a class="text-danger" href="index.php?task=deletedanhmucsp&id=<?php echo $row['id'] ?>"><i class="fas fa-trash"></i></a>
                                    <a class="text-danger" href="index.php?task=editdanhmucsp&id=<?php echo $row['id'] ?>"><i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="9" class="alert alert-danger text-center">Không có danh mục nào !</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary"><a class="abc" href="index.php?task=adddanhmuc">Thêm danh mục</a></button>

    <footer><?php include_once "Templates/Footer.php"; ?></footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>