<?php
require_once "Controllers/Controller.php";
session_start();
//controller
$Controller = new Controller();
$task = isset($_GET['task']) ? $_GET['task'] : null;

//user
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : null;
$hoten = isset($_POST['hoten']) ? $_POST['hoten'] : null;
$sdt = isset($_POST['sdt']) ? $_POST['sdt'] : null;
$diachi = isset($_POST['diachi']) ? $_POST['diachi'] : null;
$gioitinh = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : null;
$level = isset($_POST['level']) ? $_POST['level'] : null;

if (isset($_POST['register'])) {
    if (empty($email) || empty($password) || empty($repassword) || empty($hoten) || empty($sdt) || empty($diachi) || empty($gioitinh)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif ($password != $repassword) {
        $messager = "Password và nhập lại password phải giống nhau!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif (isset($email) && isset($password) && isset($repassword) && isset($hoten) && isset($sdt) && isset($diachi) && isset($gioitinh) && $repassword = $password) {
        $Controller->register($email, $password, $hoten, $sdt, $diachi, $gioitinh);
    }
}

if (isset($_POST['login'])) {
    if (empty($email) || empty($password)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } else {
        $Controller->doLogin();
    }
}

if (isset($_POST['edituser'])) {
    if (empty($hoten) || empty($sdt) || empty($diachi) || empty($gioitinh) || empty($level)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif (isset($hoten) && isset($sdt) && isset($diachi) && isset($gioitinh) && isset($level)) {
        $Controller->editUser1($hoten, $sdt, $diachi, $gioitinh, $level);
    }
}

if (isset($_POST['adduser'])) {
    if (empty($email) || empty($password) || empty($repassword) || empty($hoten) || empty($sdt) || empty($diachi) || empty($gioitinh)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif ($password != $repassword) {
        $messager = "Password và nhập lại password phải giống nhau!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif (isset($email) && isset($password) && isset($repassword) && isset($hoten) && isset($sdt) && isset($diachi) && isset($gioitinh) && $repassword = $password) {
        $Controller->adduser($email, $password, $hoten, $sdt, $diachi, $gioitinh, $level);
    }
}

//danhmuchoa
$tendanhmuc = isset($_POST['tendanhmuc']) ? $_POST['tendanhmuc'] : null;
$donoibat = isset($_POST['donoibat']) ? $_POST['donoibat'] : null;

if (isset($_POST['editdanhmucsp'])) {
    if (empty($tendanhmuc) || empty($donoibat)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif (isset($tendanhmuc) && isset($donoibat)) {
        $Controller->editdanhmucsp($tendanhmuc, $donoibat);
    }
}

if (isset($_POST['adddanhmuc'])) {
    if (empty($tendanhmuc) || empty($donoibat)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif (isset($tendanhmuc) && isset($donoibat)) {
        $Controller->adddanhmuc($tendanhmuc, $donoibat);
    }
}

//hoa
$iddanhmuc = isset($_POST['iddanhmuc']) ? $_POST['iddanhmuc'] : null;
$tenhoa = isset($_POST['tenhoa']) ? $_POST['tenhoa'] : null;
$tieude = isset($_POST['tieude']) ? $_POST['tieude'] : null;
$anh = isset($_POST['anh']) ? $_POST['anh'] : null;
$soluong = isset($_POST['soluong']) ? $_POST['soluong'] : null;
$gia = isset($_POST['gia']) ? $_POST['gia'] : null;
$mota = isset($_POST['mota']) ? $_POST['mota'] : null;
$ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : null;
$donoibatsp = isset($_POST['donoibatsp']) ? $_POST['donoibatsp'] : null;
$anh = isset($_POST['anh']) ? $_POST['anh'] : null;

if (isset($_POST['editsp'])) {
    if (empty($iddanhmuc) || empty($tenhoa) || empty($tieude) || empty($soluong) || empty($gia) || empty($mota) || empty($ghichu) || empty($donoibatsp)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif (isset($iddanhmuc) && isset($tenhoa) && isset($tieude)  && isset($soluong) && isset($gia) && isset($mota) && isset($ghichu) && isset($donoibatsp)) {
        $Controller->editsp($iddanhmuc, $tenhoa, $tieude, $anh, $soluong, $gia, $mota, $ghichu, $donoibatsp);
    }
}

if (isset($_POST['addsp'])) {
    if (empty($iddanhmuc) || empty($tenhoa) || empty($tieude) || empty($soluong) || empty($gia) || empty($mota) || empty($ghichu) || empty($donoibatsp)) {
        $messager = "Vui lòng nhập đầy đủ !!!";
        echo "<script type='text/javascript'> alert('$messager');
		</script>";
    } elseif (isset($iddanhmuc) && isset($tenhoa) && isset($tieude) && isset($soluong) && isset($gia) && isset($mota) && isset($ghichu) && isset($donoibatsp)) {
        $Controller->addsp($iddanhmuc, $tenhoa, $tieude, $anh, $soluong, $gia, $mota, $ghichu, $donoibatsp);
    }
}

if (isset($_POST['themgiohang'])) {
    $arr = [];
    $arr['id'] = $_POST['id'];
    $arr['quantity'] = $_POST['quantity'];
    $Controller->themgiohang($arr);
}

if (isset($_POST['payment'])) {
    if (isset($_SESSION['email'])) {
        header("location:index.php?task=payment");
    } else {
        header("location:index.php?task=pagelogin");
    }
}
//thanhtoan
if (isset($_POST['thanhtoan'])) {
    $Controller->payment();
}

switch ($task) {
    case 'home':
        $Controller->getHomePage();
        break;

    case 'pageregister':
        $Controller->dangky();
        break;

    case 'pagelogin':
        $Controller->dangnhap();
        break;
    case 'pageadmin':
        $Controller->pageadmin();
        break;

    case 'logout':
        session_destroy();
        header("location:index.php?task=home");
        break;

    case 'quanlynguoidung':
        $Controller->pageQuanLyNguoiDung();
        break;

    case 'deleteuser':
        $Controller->deleteUser();
        break;

    case 'edituser':
        $Controller->editUser();
        break;

    case 'adduser':
        $Controller->formAddUser();
        break;

    case 'quanlydanhmucsp':
        $Controller->pageQuanLyDM();
        break;

    case 'deletedanhmucsp':
        $Controller->deleteDM();
        break;

    case 'editdanhmucsp':
        $Controller->editDM();
        break;

    case 'adddanhmuc':
        $Controller->formAddDM();
        break;

    case 'quanlysp':
        $Controller->pageQuanLySP();
        break;

    case 'deletesp':
        $Controller->deleteSP();
        break;

    case 'editsp':
        $Controller->editFormEditSP();
        break;

    case 'addsp':
        $Controller->formAddSP();
        break;

    case 'xemthongtinsp':
        $Controller->FormThongTinSP();
        break;

    case 'giohang':
        $Controller->xemGioHang();
        break;

    case 'del_cart':
        $Controller->remove_from_cart($_GET['id']);
        break;

    case 'payment':
        $Controller->getPagePayment();
        break;
    case 'quanlydonhang':
        $Controller->getPageQLDH();
        break;

    case 'donhangnguoidung':
        $Controller->getDonHangNguoiDung();
        break;
        
    case 'sptheodanhmuc':
        $Controller->getPageSPTheoDanhMuc();
        break;

    default:
        $Controller->getHomePage();
        break;
}
