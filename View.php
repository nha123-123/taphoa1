<?php
class View
{
    public $tatcadanhmuchoatoancuc;
    public function getHomePage($tatcadanhmuc, $tatcahoa)
    {
        include_once "Templates/Home.php";
    }
    public function dangky($tatcadanhmuc)
    {
        include_once "Templates/FormDangKy.php";
    }
    public function dangnhap($tatcadanhmuc)
    {
        include_once "Templates/FormDangNhap.php";
    }
    public function pageadmin($tatcadanhmuc)
    {
        include_once "Templates/PageAdmin.php";
    }

    public function pageQuanLyNguoiDung($result, $tatcadanhmuc)
    {
        include_once "Templates/PageQuanLyNguoiDung.php";
    }

    public function editUser($result, $tatcadanhmuc)
    {
        include_once "Templates/FormEditUser.php";
    }

    public function formAddUser($tatcadanhmuc)
    {
        include_once "Templates/FormAddUser.php";
    }

    public function pageQuanLyDM($result, $tatcadanhmuc)
    {
        include_once "Templates/PageQuanLyDM.php";
    }

    public function editDM($result, $tatcadanhmuc)
    {
        include_once "Templates/FormEditDM.php";
    }

    public function formAddDM($tatcadanhmuc)
    {
        include_once "Templates/FormAddDM.php";
    }

    public function pageQuanLySP($result, $tatcadanhmuc)
    {
        include_once "Templates/PageQuanLySP.php";
    }

    public function editFormEditSP($result, $tatcadanhmuc, $tatcadanhmuc1)
    {
        include_once "Templates/FormEditSP.php";
    }

    public function formAddSP($tatcadanhmuc, $result)
    {
        include_once "Templates/FormAddSP.php";
    }
    public function pageThongTinSP($tatcadanhmuc, $result)
    {
        include_once "Templates/ThongTinSP.php";
    }
    public function xemGioHang($tatcadanhmuc, $data)
    {
        include_once "Templates/GioHang.php";
    }
    public function getPagePayment($tatcadanhmuc)
    {
        include_once "Templates/ThanhToan.php";
    }
    public function getPageQLDH($tatcadanhmuc, $tatcadonhang)
    {
        include_once "Templates/PageQLDH.php";
    }
    public function getPageSPTheoDanhMuc($tatcadanhmuc, $sptheodanhmuc)
    {
        include_once "Templates/SPTheoDanhMuc.php";
    }
    public function getPageDonHangNguoiDung($tatcadanhmuc, $donhangnguoidung)
    {
        include_once "Templates/DonHangNguoiDung.php";
    }
}
