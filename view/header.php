<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CherryTickets</title>
    <!--  Link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="view/css/home.css" />


</head>

<body>
    <header class="header">
        <div class="navbar--logo">
            <a class="a_inb" href="#">
                <img src="view/images/logo__color.png" width="280" alt="" />
            </a>
        </div>
        <div class="navbar--shotcut">
            <div class="shotcut__home">
                <a class="a_inb" href="index.php">Trang chủ</a>
            </div>
            <div class="shotcut__home">
                <a class="a_inb" href="index.php?act=schedule">Lịch thi đấu</a>
            </div>
            <div class="shotcut__home">
                <a class="a_inb" href="index.php?act=ranking">Bảng xếp hạng</a>
            </div>
            <div class="shotcut__home">
                <a class="a_inb" href="index.php?act=aboutUs">Về chúng tôi</a>
            </div>
        </div>
        <div class="navbar--user">
            <a href="index.php?act=login" class="a_inb">
                <i class="fa-regular fa-circle-user icon--user"></i>
            </a>
            <a href="" class="a_inb">
                <i class="fa-solid fa-caret-down icon--caret"></i>
            </a>
            <div class="login--success" style="display: none">
                <img src="" class="user__pic" alt="" />
                <div class="user--dropdown">
                    <ul>
                        <li><a href="" class="user__name"></a></li>
                        <li><a href="" class="user__cart"></a></li>
                        <li><a href="" class="user__logout">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
