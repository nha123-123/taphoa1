<?php
// ket noi database
class Model
{
    private $db;
    public function __construct()
    {
        $db = mysqli_connect("localhost", "root", "", "taphoa");
        mysqli_set_charset($db, "utf8");
        $this->db = $db;
    }

    public function register($email, $password, $hoten, $sdt, $diachi, $gioitinh)
    {
        $queryktemail = "SELECT * FROM users WHERE email = '" . $email . "'";
        $ktemail = mysqli_query($this->db, $queryktemail);
        if (mysqli_num_rows($ktemail) > 0) {
            return 'Email đã tồn tại vui lòng sử dụng email khác';
        } else {
            $query = "INSERT INTO users (email,password,hoten,sdt,diachi,gioitinh,level) Values ('" . $email . "','" . $password . "', '" . $hoten . "','" . $sdt . "','" . $diachi . "','" . $gioitinh . "','2')";
            mysqli_query($this->db, $query);
            return 'Đăng ký tài khoản thành công';
        }
    }
    public function doLogin()
    {
        $query = "SELECT * 
        FROM users 
        WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "'";
        $result = mysqli_query($this->db, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return false;
    }

    public function tatCaNguoiDung()
    {
        $query = "SELECT * FROM users";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function deleteUser()
    {
        $query = "DELETE FROM users WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function editUser()
    {
        $query = "SELECT *
                  FROM users
                  WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result->fetch_assoc();
    }
    public function editUser1($hoten, $sdt, $diachi, $gioitinh, $level)
    {
        $query = "update users set hoten = '" . $hoten . "', sdt = '" . $sdt . "' , diachi = '" . $diachi . "', gioitinh = '" . $gioitinh . "' , level = '" . $level . "' WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function adduser($email, $password, $hoten, $sdt, $diachi, $gioitinh, $level)
    {
        $queryktemail = "SELECT * FROM users WHERE email = '" . $email . "'";
        $ktemail = mysqli_query($this->db, $queryktemail);
        if (mysqli_num_rows($ktemail) > 0) {
            return 'Email đã tồn tại vui lòng sử dụng email khác';
        } else {
            $query = "INSERT INTO users (email,password,hoten,sdt,diachi,gioitinh,level) Values ('" . $email . "','" . $password . "', '" . $hoten . "','" . $sdt . "','" . $diachi . "','" . $gioitinh . "','" . $level . "')";
            mysqli_query($this->db, $query);
            return 'Thêm người dùng thành công';
        }
    }


    public function pageQuanLyDM()
    {
        $query = "SELECT * FROM danhmucs LIMIT 6";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function pageQuanLyDM1()
    {
        $query = "SELECT * FROM danhmucs";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function deleteDM()
    {
        $query = "DELETE FROM danhmucs WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function editDM()
    {
        $query = "SELECT *
                  FROM danhmucs
                  WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result->fetch_assoc();
    }
    public function editdanhmucsp($tendanhmuc, $donoibat)
    {
        $query = "update danhmucs set tendanhmuc = '" . $tendanhmuc . "', donoibat = '" . $donoibat . "'  WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function adddanhmuc($tendanhmuc, $donoibat)
    {
        $query = "INSERT INTO danhmucs (tendanhmuc,donoibat) Values ('" . $tendanhmuc . "','" . $donoibat . "')";
        mysqli_query($this->db, $query);
        return 'Thêm danh mục thành công';
    }


    public function pageQuanLySP()
    {
        $query = "SELECT sanphams.*, danhmucs.id as iddanhmuc, danhmucs.tendanhmuc FROM sanphams,danhmucs WHERE sanphams.iddanhmuc = danhmucs.id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function deleteSP()
    {
        $query = "DELETE FROM sanphams WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function editFormEditSP()
    {
        $query = "SELECT *
                  FROM sanphams
                  WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result->fetch_assoc();
    }
    public function editsp($iddanhmuc, $tensanpham, $tieude, $image, $soluong, $gia, $mota, $ghichu, $donoibatsp)
    {
        $anh = "AnhSanPham/$image";
        $query = "update sanphams set iddanhmuc = '" . $iddanhmuc . "', tensanpham = '" . $tensanpham . "', tieude = '" . $tieude . "' , anh = '" . $anh . "', soluong = '" . $soluong . "', gia = '" . $gia . "', mota = '" . $mota . "', ghichu = '" . $ghichu . "', donoibatsp = '" . $donoibatsp . "'  WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function edithoakhonganh($iddanhmuc, $tensanpham, $tieude, $soluong, $gia, $mota, $ghichu, $donoibatsp)
    {
        $query = "update sanphams set iddanhmuc = '" . $iddanhmuc . "', tensanpham = '" . $tensanpham . "', tieude = '" . $tieude . "' , soluong = '" . $soluong . "', gia = '" . $gia . "', mota = '" . $mota . "', ghichu = '" . $ghichu . "', donoibatsp = '" . $donoibatsp . "'  WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function addsp($iddanhmuc, $tensanpham, $tieude, $image, $soluong, $gia, $mota, $ghichu, $donoibatsp)
    {
        $anh = "AnhSanPham/$image";
        $query = "INSERT INTO sanphams (iddanhmuc,tensanpham,tieude,anh,soluong,gia,mota,ghichu,donoibatsp) Values ('" . $iddanhmuc . "','" . $tensanpham . "','" . $tieude . "','" . $anh . "','" . $soluong . "','" . $gia . "','" . $mota . "','" . $ghichu . "','" . $donoibatsp . "')";
        mysqli_query($this->db, $query);
        return 'Thêm hoa thành công';
    }

    public function thongTinHoa()
    {
        $query = "SELECT *
                  FROM sanphams
                  WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result->fetch_assoc();
    }

    public function thongTinHoaGioHang($product_id)
    {
        $query = "SELECT *
        FROM sanphams
        WHERE id = {$product_id}";
        $result = mysqli_query($this->db, $query);
        $arr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $temp = [];
            $temp['id'] = $row['id'];
            $temp['name'] = $row['tensanpham'];
            $temp['price'] = $row['gia'];
            $temp['image'] = $row['anh'];
            array_push($arr, $temp);
        }
        return $arr;
        // $result = mysqli_query($this->db, $query);
        // return $result->fetch_assoc();
    }

    public function creatBill()
    {
        $created = date("Y.m.d");
        $query = "INSERT INTO hoadon(payment_method, id_user, total, created)
                  VALUES ('{$_POST['payment_method']}', '{$_SESSION['id']}', '{$_SESSION['total']}', '{$created}')";

        if (mysqli_query($this->db, $query)) {
            return mysqli_insert_id($this->db);
        };
        return false;
    }
    public function creatDetailOrder()
    {
        $bill_id = $this->creatBill();
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            $query = "INSERT INTO chitiethoadon(id_product, id_bill, quantity_order, sub_total)
                      VALUES ('{$_SESSION['cart'][$i]['id']}','{$bill_id}','{$_SESSION['cart'][$i]['quantity']}','{$_SESSION['sub_total']}')";
            if (mysqli_query($this->db, $query)) {
                $message = "Thanh toán thành công!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                unset($_SESSION['cart']);
                header("refresh:0; url=index.php?task=home");
            } else {
                $message = "Thanh toán thất bại!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            };
        }
    }
    public function tatCaDonHang()
    {
        $query = "SELECT hoadon.*, users.hoten as hoten
        FROM hoadon,users WHERE hoadon.id_user = users.id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function hoaTheoDanhMuc()
    {
        $query = "SELECT *
        FROM sanphams WHERE sanphams.iddanhmuc = '{$_GET['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function donHangNguoiDung()
    {
        $query = "SELECT hoadon.*, users.hoten as hoten
        FROM hoadon,users WHERE hoadon.id_user = users.id AND hoadon.id_user = '{$_SESSION['id']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
}
