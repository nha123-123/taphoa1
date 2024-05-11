<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .item9 {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-left: 135px;
            gap: 45px;
            margin-right: 135px;
        }

        .item9 .hoa {
            margin-top: 25px;
        }

        .item9 .hoa .anhhoa {
            position: relative;
        }

        .item9 .hoa .anhhoa .giamgia {
            position: absolute;
            color: white;
            position: absolute;
            width: 50px;
            height: 50px;
            border: 1px solid red;
            border-radius: 50%;
            left: 205px;
            top: 11px;
            background-color: red;
            font-weight: 500;
            display: inline-block;
            text-align: center;
            font-size: 13px;
        }

        .item9 .hoa .thongtin {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 8px;
        }

        .item9 .hoa .thongtin .ten {
            font-weight: 700;
        }

        .item9 .hoa .thongtin .gia {
            display: flex;
            gap: 5px;
            font-weight: 400;
        }

        .item9 .hoa .thongtin .gia .giagiam {
            color: #e91e63;
        }

        .item9 .hoa .thongtin .gia .giachuagiam {
            text-decoration: line-through;
        }

        .item9 .hoa .thongtin .dathang {
            background-color: #e91e63;
            border-radius: 6px;

        }

        .item9 .hoa .thongtin .dathang span {
            color: white;
            text-decoration: none;
            font-size: 12px;
            display: flex;
            font-weight: 500;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        button div {
            font-weight: 500;
        }

        button a {
            font-weight: 500;
            color: white !important;
            font-size: 12px;
        }

        button a:hover {
            color: white !important;
        }
    </style>

</head>

<body>
    <footer><?php include_once "Templates/Header.php"; ?></footer>



    <div class="item9">
        <?php
        if (mysqli_num_rows($sptheodanhmuc) > 0) {
            while ($row = mysqli_fetch_assoc($sptheodanhmuc)) {
        ?>
                <div class="hoa" key={index}>
                    <div class="anhhoa">
                        <img src="<?php echo $row['anh'] ?>" width=" 261" height="326" />
                    </div>
                    <div class="thongtin">
                        <span class="ten">
                            <?php echo $row['tensanpham'] ?>
                        </span>
                        <div class="gia">
                            <span class="giagiam">
                                <?php echo $row['gia'] ?>đ
                            </span>
                        </div>
                        <div class="dathang">
                            <button class="btn">
                                <div>
                                    <a href="index.php?task=xemthongtinsp&id=<?php echo $row['id'] ?>">
                                        XEM THÔNG TIN
                                    </a>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="9" class="alert alert-danger text-center">Không có sản phẩm nào !</td>
            </tr>
        <?php
        }
        ?>
    </div>
    <footer><?php include_once "Templates/Footer.php"; ?></footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>