<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .item1header {
      display: flex;
    }

    .item1header .item1trai {
      width: 30%;
      text-align: center;
    }

    .item1header .item1giua {
      width: 40%;
      display: flex;
      gap: 20px;
      align-items: center;
      justify-content: center;
    }

    .item1header .item1giua span {
      font-weight: 500;
    }

    .item1header .item1phai {
      width: 30%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .item1header .item1phai span {
      font-size: 30px;
    }

    .item1phai .tk-gh-tt {
      display: flex;
      color: #696363;
      text-shadow: 0 1px 0 #FFF;
      font-size: 15px;
    }

    .item1phai .tk-gh-tt .icon {
      margin: 0 3px;
      cursor: pointer;
    }

    .item1phai .tk-gh-tt .icon .iconlink {
      text-decoration: none;
      color: #696363;
    }

    .item1phai .tk-gh-tt .icon span {
      margin: 0 2px;
      font-size: 21px;
    }

    .item1phai .tk-gh-tt .icon.ngonngu span {
      margin: 0 8px;
    }

    .item1phai .tk-gh-tt .icon.ngonngu .ngonngukhongduocchon {
      opacity: 1;
      color: #e91e63;
    }

    .item1phai .tk-gh-tt .icon.ngonngu .ngonnguduocchon {
      opacity: 0.4;
    }

    .item1phai .tk-gh-tt .icon.taikhoan ul {
      display: none;
    }

    .item1phai .tk-gh-tt .icon.taikhoan:hover ul {
      position: absolute;
      display: block;
      list-style-type: none;
      background-color: white;
      border: 1px solid #ccc;
      width: 200px;
      height: 94px;
      padding-left: 21px;
      z-index: 10 !important;
    }

    .item1phai .tk-gh-tt .icon.taikhoan:hover ul .dangnhap,
    .item1phai .tk-gh-tt .icon.taikhoan:hover ul .dangky,
    .item1phai .tk-gh-tt .icon.taikhoan:hover ul .thongtinnguoidung {
      text-decoration: none;
      color: #696363;
    }

    .item1phai .tk-gh-tt .icon.taikhoan:hover ul .dangnhap li {
      margin-left: -106px;
    }

    .item1phai .tk-gh-tt .icon.taikhoan:hover ul .dangky li {
      margin-left: -124px;
    }

    .item1phai .tk-gh-tt .icon.taikhoan:hover ul .thongtinnguoidung .thongtinnguoidungen {
      margin-left: 4px;
    }

    a {
      text-decoration: none !important;
      color: #696363 !important;
    }

    a:hover {
      color: #696363 !important;
    }

    .danhmuc a {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <header class="item1header">
    <div class="item1trai">
      <a href="index.php?task=home">
        <img src="Images/logotaphoa.png" height="120" />
      </a>

    </div>
    <div class="item1giua">


      <?php
      if (mysqli_num_rows($tatcadanhmuc) > 0) {
        while ($row = mysqli_fetch_assoc($tatcadanhmuc)) {
      ?>
          <span class="danhmuc">
            <a href="index.php?task=sptheodanhmuc&id=<?php echo $row['id'] ?>">
              <?php echo $row['tendanhmuc']; ?>
            </a>
          </span>
      <?php
        }
      }
      ?>
    </div>
    <div class="item1phai">
      <div class="tk-gh-tt">
        <div class="icon taikhoan">
          <span>
            <i class="fas fa-user"></i>
          </span>
          <?php if (isset($_SESSION['hoten'])) { ?>
            <span><?php echo $_SESSION['hoten'] ?></span>
          <?php } else { ?>
            <span>Tài khoản</span>
          <?php } ?>
          <ul>
            <a href="index.php?task=pageregister">
              <li>
                Đăng ký
              </li>
            </a>
            <?php if (isset($_SESSION['hoten'])) {
              if ($_SESSION['level'] == 2) { ?>
                <a href="index.php?task=logout">
                  <li>Đăng xuất</li>
                </a>
              <?php } elseif ($_SESSION['level'] == 1) { ?>
                <a href="index.php?task=pageadmin">
                  <li>Quản lý</li>
                </a>
                <a href="index.php?task=logout">
                  <li>Đăng xuất</li>
                </a>
              <?php } ?>
            <?php } else { ?>
              <a href="index.php?task=pagelogin">
                <li>
                  Đăng nhập
                </li>
              </a>
            <?php } ?>
          </ul>
        </div>
        <div class="icon">
          <a href="index.php?task=giohang">
            <span>
              <i class="fas fa-shopping-cart"></i>
            </span>
            <span>
              Giỏ hàng
            </span>
          </a>
        </div>
        <div class="icon">
        <a href="index.php?task=donhangnguoidung">
          <span>
            <i class="fas fa-truck"></i>
          </span>
          <span>
            Đơn hàng
          </span>
        </a>
      </div>

      </div>
    </div>
  </header>
</body>

</html>