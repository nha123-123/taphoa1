<?php
require_once "Models/Model.php";
require_once "Views/View.php";

class Controller
{
    var $model, $view;
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }

    public function getHomePage()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $tatcahoa = $this->model->pageQuanLySP();
        $this->view->getHomePage($tatcadanhmuc, $tatcahoa);
    }

    public function register($email, $password, $hoten, $sdt, $diachi, $gioitinh)
    {
        $result = $this->model->register($email, $password, $hoten, $sdt, $diachi, $gioitinh);
        if ($result == 'Đăng ký tài khoản thành công') {
            echo "<script type='text/javascript'> 
            alert('$result');
            window.location.href = 'index.php?task=pagelogin';
        </script>";
        } else {
            echo "<script type='text/javascript'> 
            alert('$result');
            window.location.href = 'index.php?task=pageregister';
        </script>";
        }
    }
    public function dangky()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->dangky($tatcadanhmuc);
    }

    public function dangnhap()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->dangnhap($tatcadanhmuc);
    }
    public function doLogin()
    {
        $result = $this->model->doLogin();
        if ($result == false) {
            $message = "Email và password không đúng vui lòng nhập lại";
            echo "<script type='text/javascript'> 
              alert('$message');
              window.location.href = 'index.php?task=pagelogin';
          </script>";
        } else {
            $_SESSION['id'] = $result['id'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['hoten'] = $result['hoten'];
            $_SESSION['sdt'] = $result['sdt'];
            $_SESSION['diachi'] = $result['diachi'];
            $_SESSION['gioitinh'] = $result['gioitinh'];
            $_SESSION['level'] = $result['level'];
            if ($result['level'] == 2) {
                header("location:index.php?task=pagehome");
            } elseif ($result['level'] == 1) {
                header("location:index.php?task=pageadmin");
            }
        }
    }

    public function pageadmin()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->pageadmin($tatcadanhmuc);
    }

    public function pageQuanLyNguoiDung()
    {
        $result = $this->model->tatCaNguoiDung();
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->pageQuanLyNguoiDung($result, $tatcadanhmuc);
    }
    public  function deleteUser()
    {
        $this->model->deleteUser();
        header("location:index.php?task=quanlynguoidung");
    }
    public function editUser()
    {
        $result = $this->model->editUser();
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->editUser($result, $tatcadanhmuc);
    }
    public function editUser1($hoten, $sdt, $diachi, $gioitinh, $level)
    {
        $result = $this->model->editUser1($hoten, $sdt, $diachi, $gioitinh, $level);
        $message = "Sua thong tin thanh cong";
        echo "<script type='text/javascript'> alert('$message');
		</script>";
        header("location:index.php?task=quanlynguoidung");
    }
    public function formAddUser()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->formAddUser($tatcadanhmuc);
    }
    public function adduser($email, $password, $hoten, $sdt, $diachi, $gioitinh, $level)
    {
        $result = $this->model->adduser($email, $password, $hoten, $sdt, $diachi, $gioitinh, $level);
        if ($result == 'Email đã tồn tại vui lòng sử dụng email khác') {
            echo "<script type='text/javascript'> 
            alert('$result');
            window.location.href = 'index.php?task=adduser';
        </script>";
        } else {
            echo "<script type='text/javascript'> 
            alert('$result');
            window.location.href = 'index.php?task=quanlynguoidung';
        </script>";
        }
    }


    public function pageQuanLyDM()
    {
        $result = $this->model->pageQuanLyDM1();
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->pageQuanLyDM($result, $tatcadanhmuc);
    }
    public  function deleteDM()
    {
        $this->model->deleteDM();
        header("location:index.php?task=quanlydanhmucsp");
    }
    public function editDM()
    {
        $result = $this->model->editDM();
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->editDM($result, $tatcadanhmuc);
    }
    public function editdanhmucsp($tendanhmuc, $donoibat)
    {
        $result = $this->model->editdanhmucsp($tendanhmuc, $donoibat);
        $message = "Sua thong tin thanh cong";
        echo "<script type='text/javascript'> alert('$message');
		</script>";
        header("location:index.php?task=quanlydanhmucsp");
    }
    public function formAddDM()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->formAddDM($tatcadanhmuc);
    }
    public function adddanhmuc($tendanhmuc, $donoibat)
    {
        $result = $this->model->adddanhmuc($tendanhmuc, $donoibat);
        echo "<script type='text/javascript'> 
            window.location.href = 'index.php?task=quanlydanhmucsp';
        </script>";
    }


    public function pageQuanLySP()
    {
        $result = $this->model->pageQuanLySP();
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->pageQuanLySP($result, $tatcadanhmuc);
    }
    public  function deleteSP()
    {
        $this->model->deleteSP();
        header("location:index.php?task=quanlydanhmucsp");
    }
    public function editFormEditSP()
    {
        $result = $this->model->editFormEditSP();
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $result1 = $this->model->pageQuanLyDM1();
        $this->view->editFormEditSP($result, $tatcadanhmuc, $result1);
    }
    public function editsp($iddanhmuc, $tenhoa, $tieude, $anh, $soluong, $gia, $mota, $ghichu, $donoibatsp)
    {
        if (empty($_FILES['anh']['name'])) {
            $result = $this->model->edithoakhonganh($iddanhmuc, $tenhoa, $tieude, $soluong, $gia, $mota, $ghichu, $donoibatsp);
            $message = "Sua thong tin thanh cong";
            echo "<script type='text/javascript'> alert('$anh');
            </script>";
            header("location:index.php?task=quanlysp");
        } else {
            $path = "AnhSanPham/";
            $image = $_FILES['anh']['name'];
            $image_tmp = $_FILES['anh']['tmp_name'];
            $current_time = time();
            $new_image_name = $current_time . '_' . $image;
            if (move_uploaded_file($image_tmp, $path . $new_image_name)) {
                $result = $this->model->editsp($iddanhmuc, $tenhoa, $tieude, $new_image_name, $soluong, $gia, $mota, $ghichu, $donoibatsp);
                $message = "Sua thong tin thanh cong";
                echo "<script type='text/javascript'> alert('$image');
            </script>";
                header("location:index.php?task=quanlysp");
            } else {
                $message = "Lỗi khi tải lên tập tin!";
                echo "<script type='text/javascript'> alert('$anh'); </script>";
            }
        }
    }
    public function formAddSP()
    {
        $result = $this->model->pageQuanLyDM1();
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $this->view->formAddSP($tatcadanhmuc, $result);
    }
    public function addsp($iddanhmuc, $tenhoa, $tieude, $image, $soluong, $gia, $mota, $ghichu, $donoibatsp)
    {
        $path = "AnhSanPham/";
        $image = $_FILES['anh']['name'];
        $image_tmp = $_FILES['anh']['tmp_name'];
        $current_time = time();
        $new_image_name = $current_time . '_' . $image;
        if (move_uploaded_file($image_tmp, $path . $new_image_name)) {
            $result = $this->model->addsp($iddanhmuc, $tenhoa, $tieude, $new_image_name, $soluong, $gia, $mota, $ghichu, $donoibatsp);
            echo "<script type='text/javascript'> 
            window.location.href = 'index.php?task=quanlysp';
        </script>";
        } else {
            $message = "Lỗi khi tải lên tập tin!";
            echo "<script type='text/javascript'> alert('$message'); </script>";
        }
    }
    public function FormThongTinSP()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $result = $this->model->thongTinHoa();
        $this->view->pageThongTinSP($tatcadanhmuc, $result);
    }

    public function themgiohang($info)
    {
        if (isset($_SESSION['cart'])) {
            if (count($_SESSION['cart']) > 0) {
                $this->merge($info);
            } else {
                array_push($_SESSION['cart'], $info);
            }
        } else {
            $_SESSION['cart'] = [];
            if (count($_SESSION['cart']) > 0) {
                $this->merge($info);
            } else {
                array_push($_SESSION['cart'], $info);
            }
        }
    }
    function merge($new_added)
    {
        $ids = array_column($_SESSION['cart'], 'id');
        if (in_array($new_added['id'], $ids)) {
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                if ($_SESSION['cart'][$i]['id'] == $new_added['id']) {
                    $total_quantity = $_SESSION['cart'][$i]['quantity'] + $new_added['quantity'];
                    if ($total_quantity < 11) {
                        $_SESSION['cart'][$i]['quantity'] = $total_quantity;
                    } else {
                        $_SESSION['cart'][$i]['quantity'] = 10;
                    }
                }
            }
        } else {
            array_push($_SESSION['cart'], $new_added);
        }
    }
    public function xemGioHang()
    {
        if (isset($_SESSION['cart'])) {
            $product_info = [];
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                $data['quantity'] = $_SESSION['cart'][$i]['quantity'];
                $data['product_info'] = $this->model->thongTinHoaGioHang($_SESSION['cart'][$i]['id']);
                array_push($product_info, $data);
            }
            $data = $product_info;
            $tatcadanhmuc = $this->model->pageQuanLyDM();
            $this->view->xemGioHang($tatcadanhmuc, $data);
        } else {
            $message = "Không có sản phẩm trong giỏ hàng";
            echo "<script type='text/javascript'> 
              alert('$message');
              window.location.href = 'index.php?task=home';
          </script>";
        }
    }
    function remove_from_cart($product_id)
    {
        $ids = array_column($_SESSION['cart'], 'id');
        if (in_array($product_id, $ids)) {
            $key = array_search($product_id, $ids);
            print_r($key);
            if ($key !== false) {
                unset($_SESSION['cart'][$key]);
                Sort($_SESSION['cart']);
                header('Location: ' . $_SERVER["HTTP_REFERER"] . '');
            }
        }
    }
    public function getPagePayment()
    {
        if (isset($_SESSION['email'])) {
            $tatcadanhmuc = $this->model->pageQuanLyDM();
            $this->view->getPagePayment($tatcadanhmuc);
        } else {
            header("location:index.php?task=pagelogin");
        }
    }
    public function payment()
    {
        if (isset($_SESSION['email'])) {
            $this->model->creatDetailOrder();
        } else {
            header("location:index.php?task=pagelogin");
        }
    }

    public function getPageQLDH()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $tatcadonhang = $this->model->tatCaDonHang();
        $this->view->getPageQLDH($tatcadanhmuc, $tatcadonhang);
    }

    public function getPageSPTheoDanhMuc()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $sptheodanhmuc = $this->model->hoaTheoDanhMuc();
        $this->view->getPageSPTheoDanhMuc($tatcadanhmuc, $sptheodanhmuc);
    }

    public function getDonHangNguoiDung()
    {
        $tatcadanhmuc = $this->model->pageQuanLyDM();
        $donhangnguoidung = $this->model->donHangNguoiDung();
        $this->view->getPageDonHangNguoiDung($tatcadanhmuc, $donhangnguoidung);
    }
}
