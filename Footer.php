<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
.footer {
    background-color: #f2f2f2;
    padding: 20px;
}

.footer .item1 {
    font-weight: 500;
    font-size: 20px;
    margin-bottom: 10px;
}

.footer .item2 {
    text-align: center;
    color: red;
    font-style: italic;
    margin-bottom: 10px;
}

.footer .item3tong {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer .item3 {
    width: calc(33.33% - 20px);
    margin-bottom: 20px;
}

.footer .item3phai {
    margin-left: 10px;
}

.footer .item3phai .tren {
    font-weight: bold;
}

.footer .item4 {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.footer .item4 div {
    width: 30%;
}

.footer .item4 .duoi span {
    display: block;
    margin-bottom: 5px;
}

</style>
</head>
<body>
<footer class="footer mt-3">
    <div class="item1">
        <span>Địa chỉ các kho hàng(15)</span>
    </div>
    <div class="item2">
        Giao hàng toàn quốc. Giao nhanh cả ban đêm, ngày nghỉ
    </div>
    <div class="item3tong">
        <div class="item3">
            <div class="item3trai">
                <span>1</span>
            </div>
            <div class="item3phai">
                <span class="tren">Chi nhánh Việt nam</span>
                <span class="dưới">Tpho Thái Nguyên</span>
            </div>
        </div>
        <!-- Thêm các item3 còn lại tương tự -->
    </div>
    <div class="item4">
        <div class="item4trai">
            <div class="tren">
                Cửa Hàng Tạp Hóa
            </div>
            <div class="duoi">
                <span>Website chuyên cung cấp sản phẩm giá sỉ lẻ phân phối toàn quốc...</span>
                <span>info@cuahangtaphoa.com</span>
            </div>
        </div>
        <div class="item4giua">
            <div class="tren">
                Category
            </div>
            <div class="duoi">
                <span>Điều khoản sử dụng</span>
                <span>Chính sách bảo mật</span>
                <span>Giới thiệu</span>
                <span>Liên hệ</span>
            </div>
        </div>
        <div class="item4phai">
            <div class="tren">
                Other
            </div>
            <div class="duoi">
                <span>Sản phẩm Hot</span>
                <span>Vay tiền nhanh Olava</span>
                <span>Poper Bình Thạnh</span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
