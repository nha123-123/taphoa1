<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        .item1 {
            display: flex;
            justify-content: center;
            margin: 37px 167px;
            gap: 37px;
            background-color: aquamarine;
        }

        .item1 .thongtin .tenhoa {
            font-weight: 400;
            font-size: 35px;
            border-bottom: 1px solid #863d3d;
            padding-bottom: 10px;
            display: flex;
        }

        .item1 .thongtin .gia {
            display: flex;
            gap: 25px;
            border-bottom: 1px solid #ccc;
            padding: 7px 0;
        }

        .item1 .thongtin .gia .giathuc {
            color: #866969;
            font-size: 26px;
            text-decoration: line-through;
        }

        .item1 .thongtin .gia .giagiam {
            color: #e91e63;
            font-size: 26px;
        }

        .item1 .thongtin .gia .phantram {
            background-color: #ff0000;
            padding: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 28px;
            margin: 8px 0;
            font-weight: 500;
            color: white;
            padding: 0 7px;
        }

        .item1 .thongtin .tieude {
            font-size: 17px;
        }

        .item1 .thongtin .sdt {
            margin: 17px 0;
        }

        .item1 .thongtin .sdt .goi {
            font-weight: 700;
            font-size: 17px;
            color: #db1b57;
        }

        .item1 .thongtin .sdt .sodienthoai {
            background-color: #ffe1e1;
            font-size: 27px;
            font-weight: 500;
            border-radius: 6px;
            margin: -9px 24px;
            padding: 4px;
            color: #db1b57;
        }

        .item1 .thongtin .chat {
            margin: 17px 0;
            display: flex;
        }

        .item1 .thongtin .chat span {
            font-weight: 700;
            font-size: 17px;
            color: #db1b57;
        }

        .item1 .thongtin .chat .icon {
            margin: 0 23px;
        }

        .item1 .thongtin .chat .icon img {
            border-radius: 50%;
            width: 38%;
            height: auto;
            margin-right: 12px;
            margin-top: -8px;
        }

        .item1 .thongtin .giaohang {
            display: flex;
            flex-direction: column;
        }

        .item1 .thongtin .giaohang span {
            font-weight: 700;
            font-size: 17px;
            color: #db1b57;
        }

        .item1 .thongtin .giaohang .giaohang1 .giaohang11 {
            font-weight: 400;
            font-size: 17px;
            color: black;
        }

        .item1 .thongtin .ghichu {
            background-color: #feedd6;
            padding: 9px;
            border-radius: 8px;
        }

        .item1 .thongtin .ghichu i {
            color: white;
            background-color: #6e5b40;
            width: 20px;
            height: 20px;
            border-radius: 10px;
            text-align: center;
            padding-top: 3px;
            margin-right: 5px;
        }

        .item1 .thongtin .ghichu span {
            font-weight: 400;
        }

        .item1 .thongtin .sl-gh-dh .sl {
            display: flex;
            flex-direction: row;
            gap: 21px;
        }

        .item1 .thongtin .sl-gh-dh .sl input {
            width: 106px;
        }

        .item1 .thongtin .sl-gh-dh .sl .soluongmua {
            display: flex;
            margin-left: -23px;
        }

        .item1 .thongtin .sl-gh-dh .sl .soluongmua .nuttang {
            margin-left: 5px;
        }

        .item1 .thongtin .sl-gh-dh .sl .soluongmua .nutgiam {
            margin-right: 5px;
        }

        .item1 .thongtin .sl-gh-dh .sl .soluongmua .inputsoluongmua {
            width: 70px;
            text-align: center;
        }

        .item1 .thongtin .sl-gh-dh .nutbam {
            display: flex;
            flex-direction: row;
            gap: 21px;
        }

        .item1 .thongtin .sl-gh-dh .nutbam .dh {
            color: white;
            background-color: #6a8a70;
            width: 106px;
            text-transform: uppercase;
        }

        .item1 .thongtin .sl-gh-dh .nutbam .gh {
            color: white;
            background-color: #00e539;
            width: 130px;
            height: 39px;
            margin-top: 10px;
        }

        .item1 .thongtin .sl-gh-dh .nutbamEn {
            gap: 57px;
        }

        .item1 .thongtin .tangkem {
            display: flex;
            gap: 46px;
        }

        .item1 .thongtin .tangkem .giaohangnhanh {
            font-weight: 400;
            width: 309px;
        }

        .item1 .thongtin .tangkem .thiep {
            font-weight: 400;
            width: 303px;
        }

        .item2 {
            font-weight: 400;
            margin: 0 170px;
            display: flex;
        }

        .item2 .mota {
            font-weight: 600;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-left: 1px solid #ccc;
            padding: 11px;
            cursor: pointer;
            width: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .item2 .danhgia {
            font-weight: 600;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-left: 1px solid #ccc;
            padding: 11px;
            cursor: pointer;
            width: 162px;
        }

        .item2 .boder {
            border-bottom: 1px solid #ccc;
            margin-top: 9px;
            width: 995px;
        }

        .item2 .boderbottom {
            border-bottom: 1px solid #ccc;
        }

        .item3mota {
            margin: 0 170px;
        }
    </style>
</head>

<body>
    <footer><?php include_once "Templates/Header.php"; ?></footer>

    <div class="item1">
        <div class="anh">
            <img src="<?= $result['anh'] ?>" width="490" height="650" />
        </div>
        <div class="thongtin">
            <span class="tenhoa">
                <?= $result['tensanpham'] ?>
            </span>
            <div class="gia">
                <span class="giagiam">
                    <?= $result['gia'] ?>
                </span>
            </div>
            <span class="tieude">
                <?= $result['tieude'] ?>
            </span>
            <div class="sdt">
                <span class="goi">
                    Gọi ngay:
                </span>
                <span class="sodienthoai">0987334091</span>
            </div>
            <div class="chat">
                <span>
                    Chat ngay:
                </span>
                <div class="icon">
                    <img src="Images/ms.png" />
                    <img src="Images/zalo.png" />
                </div>
            </div>
            <div class="giaohang">
                <div class="giaohang1">
                    <span>
                        Vận chuyển
                    </span>
                    <span class="giaohang11">
                        Nhanh chóng theo yêu cầu của quý khách
                    </span>
                </div>
                <span>
                    Phí giao hàng miễn phí
                </span>
            </div>
            <div class="ghichu">
                <i class="fas fa-exclamation"></i>
                <span>
                    <?= $result['ghichu'] ?>
                </span>
            </div>
            <div class="sl-gh-dh">
                <div class="sl">
                    <div class="form-group">
                        <label>
                            Số lượng còn:
                        </label>
                        <input value="<?= $result['soluong'] ?>" disabled type="number" class="form-control " style="width: 100px" />
                    </div>
                    <div class="form-group">
                        <label>
                            Số lượng mua
                        </label>
                        <div class="soluongmua">

                            <button class="btn nuttgiam" id="decreaseBtn">
                                <i class="fas fa-angle-left"></i>
                            </button>

                            <input class="form-control inputsoluongmua" value="1" type="text" name="soluongmua" id="soluongmua" />
                            <button class="btn nuttang" id="increaseBtn">
                                <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="nutbam mb-3">
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $result['id'] ?>" name="id">
                        <input value="1" type="hidden" name="quantity" id="quantity" />
                        <button class="btn gh" type="submit" name="themgiohang">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </form>

                </div>
            </div>
            <!-- <div class="tangkem">
                <div class="giaohangnhanh">
                    <img src="Images/vanchuyen.png" width="64" height="53" />
                    <span>
                        Giao NHANH trong 60 phút </span>
                </div>
                <div class="thiep">
                    <img src="Images/banner.png" width="64" height="53" />
                    <span>
                        Tặng miễn phí thiệp hoặc banner </span>
                </div>
            </div> -->
        </div>
    </div>
    <div class="item2">
        <span class="mota">
            Mô tả
        </span>
        <div class="boder"></div>
    </div>
    <div class="item3mota">
        <div>
            <div><?= $result['mota'] ?></div>
        </div>
    </div>

    <footer><?php include_once "Templates/Footer.php"; ?></footer>
    <?php include_once "Templates/link.php"; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Lấy ra trường input và nút tăng/giảm
            var inputQuantity = document.getElementById("soluongmua");
            var increaseBtn = document.getElementById("increaseBtn");
            var decreaseBtn = document.getElementById("decreaseBtn");
            var soluongmuaInput2 = document.getElementById("quantity")

            inputQuantity.addEventListener("input", function() {
                var value = inputQuantity.value;
                soluongmuaInput2.value = value;
            });

            // Xử lý khi trang được tải
            updateButtonState();

            // Xử lý khi giá trị của trường input thay đổi
            inputQuantity.addEventListener("change", function() {
                updateButtonState();
            });

            // Xử lý khi nút tăng được nhấn
            increaseBtn.addEventListener("click", function() {
                // Tăng giá trị của trường input lên 1
                inputQuantity.value = parseInt(inputQuantity.value) + 1;
                // Cập nhật trạng thái của nút
                soluongmuaInput2.value = inputQuantity.value;
                updateButtonState();
            });

            // Xử lý khi nút giảm được nhấn
            decreaseBtn.addEventListener("click", function() {
                // Giảm giá trị của trường input đi 1, nhưng không dưới 1
                if (parseInt(inputQuantity.value) > 1) {
                    inputQuantity.value = parseInt(inputQuantity.value) - 1;
                    soluongmuaInput2.value = inputQuantity.value;
                }
                // Cập nhật trạng thái của nút
                updateButtonState();
            });

            // Hàm cập nhật trạng thái của nút
            function updateButtonState() {
                var inputValue = parseInt(inputQuantity.value);
                var minQuantity = parseInt("<?= $result['soluong'] ?>");
                // Nếu giá trị của trường input nhỏ hơn hoặc bằng 1, disable nút giảm
                if (inputValue <= 1) {
                    decreaseBtn.disabled = true;
                } else {
                    decreaseBtn.disabled = false;
                }
                // Nếu giá trị của trường input lớn hơn hoặc bằng giá trị tối thiểu, disable nút tăng
                if (inputValue >= minQuantity) {
                    increaseBtn.disabled = true;
                } else {
                    increaseBtn.disabled = false;
                }
            }

        });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>