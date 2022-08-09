<?php
include "view/header.php";
if (isset($_GET["act"]) && $_GET['act']) {
    $act = $_GET['act'];
    switch ($act) {
        case 'aboutUs':
            // include "css/aboutUs.css";
            include "view/aboutUs.php";
            break;
        case 'schedule':
            include "view/schedule.php";
            break;
        case "login":
            include "view/login.php";
            break;
        case "tickets":
            include "view/tickets.php";
            break;
        case "ranking":
            include "view/ranking.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
